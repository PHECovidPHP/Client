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

namespace PHECovid\Gen\Client;

use PHECovid\Client\Client;
use PHECovid\Client\HttpClient\Util\JsonArray;
use PHECovid\Client\Model\Date;
use PHECovid\Client\ResultPager;

/**
 * @internal
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
final class Fetcher
{
    /**
     * @var \PHECovid\Client\Client
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

    public function fetchAreaData(string $method): array
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

    public function fetchMsoaData(): array
    {
        $regions = JsonArray::decode((string) $this->client->getHttpClient()->get('https://coronavirus.data.gov.uk/public/assets/dispatch/region2la2msoa.json')->getBody())['region'];

        $map = [];

        foreach ($regions as $region) {
            foreach ($region['la'] as $laCode => $la) {
                foreach ($la['msoa'] as $code => $msoa) {
                    if ('E02006049' === $code) {
                        $msoa['name'] .= ' 1';
                    }
                    if ('E02006050' === $code) {
                        $msoa['name'] .= ' 2';
                    }
                    $map[$code] = ['name' => $msoa['name'], 'la' => ['code' => $laCode, 'name' => $la['name']]];
                }
            }
        }

        return $map;
    }
}
