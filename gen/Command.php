<?php

declare(strict_types=1);

/*
 * This file is part of the PHE Covid API Client.
 *
 * (c) Graham Campbell <graham@alt-three.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHECovid\Gen;

use PHECovid\Client;
use PHECovid\HttpClient\Util\JsonArray;
use PHECovid\Model\Date;
use PHECovid\ResultPager;

/**
 * This is the generator class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
final class Command
{
    /**
     * @var \PHECovid\Client
     */
    private $client;

    private function __construct(Client $client)
    {
        $this->client = $client;
    }

    public static function create(): self
    {
        return new self(new Client());
    }

    public function run(): int
    {
        $this->generate('Nation', $this->fetchData('byNation'));
        $this->generate('Region', $this->fetchData('byRegion'));
        $this->generate('Utla', $this->fetchData('byUtla'));
        $this->generate('Ltla', $this->fetchData('byLtla'));
        $this->generate('Msoa', $this->fetchMsoaData());

        return 0;
    }

    private function fetchData(string $method): array
    {
        $pager = new ResultPager($this->client);

        $data = $this->client->dataV1(
            ['areaName' => 'areaName', 'areaCode' => 'areaCode'],
            Date::create(2020, 12, 30)
        );

        $entries = [];

        foreach ($pager->fetchAll($data, $method) as $raw) {
            $entries[$raw['areaCode']] = ['name' => $raw['areaName']];
        }

        return $entries;
    }

    private function fetchMsoaData(): array
    {
        $regions = JsonArray::decode((string) $this->client->getHttpClient()->get('https://coronavirus.data.gov.uk/public/assets/dispatch/region2la2msoa.json')->getBody())['region'];

        $map = [];

        foreach ($regions as $region) {
            foreach ($region['la'] as $la) {
                foreach ($la['msoa'] as $code => $msoa) {
                    if ($code === 'E02006049') {
                        $msoa['name'] .= ' 1';
                    }
                    if ($code === 'E02006050') {
                        $msoa['name'] .= ' 2';
                    }
                    $map[$code] = ['la' => $la['name'], 'name' => $msoa['name']];
                }
            }
        }

        return $map;
    }

    private function generate(string $class, array $map): void
    {
        $filename = \sprintf('%s/../src/Model/%s.php', __DIR__, $class);
        $content = Generator::generate($class, $map);

        \file_put_contents($filename, $content);
        echo \sprintf("Written %s\n", \basename($filename));
    }
}
