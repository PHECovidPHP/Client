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

use GuzzleHttp\Psr7\Utils;
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
     * @var array<string,string>
     */
    private const LEGACY_LTLA_TO_UTLA_MAP = [
        'E07000004' => 'E10000002',
        'E07000005' => 'E10000002',
        'E07000006' => 'E10000002',
        'E07000007' => 'E10000002',
    ];

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

    public function fetchNationData(): array
    {
        return $this->fetchAreaData('byNation');
    }

    public function fetchRegionData(): array
    {
        return $this->fetchAreaData('byRegion');
    }

    private function fetchAreaData(string $method): array
    {
        $pager = new ResultPager($this->client);

        $data = $this->client->dataV1(
            ['areaName' => 'areaName', 'areaCode' => 'areaCode'],
            Date::create(2020, 12, 30)
        );

        $map = [];

        foreach ($pager->fetchAll($data, $method) as $raw) {
            $map[$raw['areaCode']] = ['name' => $raw['areaName']];
        }

        return $map;
    }

    public function fetchUtlaData(): array
    {
        $parents = $this->fetchDistrictToRegionData();

        $map = [];

        foreach ($this->fetchAreaData('byUtla') as $code => $data) {
            if (isset($parents[$code])) {
                $data['parent'] = ['code' => $parents[$code]];
            }

            $map[$code] = $data;
        }

        return $map;
    }

    private function fetchDistrictToRegionData(): array
    {
        // https://geoportal.statistics.gov.uk/datasets/local-authority-district-to-region-december-2020-lookup-in-england/data?page=16
        $body = $this->client->getHttpClient()->get('https://opendata.arcgis.com/datasets/054349b09c094df2a97f8ddbd169c7a7_0.csv')->getBody();
        $body->rewind();

        $map = [];

        while ('' !== ($line = Utils::readLine($body))) {
            $parsed = \str_getcsv($line);
            if (isset($parsed[3]) && 'RGN20CD' !== $parsed[3]) {
                $map[$parsed[1]] = $parsed[3];
            }
        }

        return $map;
    }

    public function fetchLtlaData(): array
    {
        $parents = $this->fetchLtlaToUtlaData();

        $map = [];

        foreach ($this->fetchAreaData('byLtla') as $code => $data) {
            if (isset($parents[$code])) {
                $data['parent'] = ['code' => $parents[$code]];
            }

            $map[$code] = $data;
        }

        return $map;
    }

    private function fetchLtlaToUtlaData(): array
    {
        // https://geoportal.statistics.gov.uk/datasets/lower-tier-local-authority-to-upper-tier-local-authority-december-2020-lookup-in-england-and-wales/data
        $body = $this->client->getHttpClient()->get('https://opendata.arcgis.com/datasets/e82d9a4153b6459b9a6603b79189fdb8_0.csv')->getBody();
        $body->rewind();

        $map = [];

        while ('' !== ($line = Utils::readLine($body))) {
            $parsed = \str_getcsv($line);
            if (isset($parsed[3]) && 'UTLA17CD' !== $parsed[3]) {
                $map[$parsed[1]] = $parsed[3];
            }
        }

        return \array_merge(self::LEGACY_LTLA_TO_UTLA_MAP, $map);
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
                    $map[$code] = ['name' => $msoa['name'], 'parent' => ['code' => $laCode, 'name' => $la['name']]];
                }
            }
        }

        return $map;
    }
}
