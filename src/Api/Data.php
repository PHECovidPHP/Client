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

namespace PHECovid\Api;

use PHECovid\Client;
use PHECovid\HttpClient\Util\JsonArray;
use PHECovid\Model\Date;
use PHECovid\Model\Ltla;
use PHECovid\Model\Nation;
use PHECovid\Model\Region;
use PHECovid\Model\Utla;

/**
 * The data API class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class Data extends AbstractApi
{
    /**
     * @var array
     */
    protected $structure;

    /**
     * @var Date|null
     */
    protected $date;

    /**
     * @var string|null
     */
    protected $latestBy;

    /**
     * Create a new data API instance.
     *
     * @param \PHECovid\Client     $client
     * @param array                $structure
     * @param \PHECovid\Model\Date $date
     * @param string|null          $latestBy
     *
     * @return void
     */
    public function __construct(Client $client, array $structure, Date $date = null, string $latestBy = null)
    {
        parent::__construct($client);
        $this->structure = $structure;
        $this->date = $date;
        $this->latestBy = $latestBy;
    }

    /**
     * @throws \Http\Client\Exception
     *
     * @return array|null
     */
    public function overview(): ?array
    {
        return $this->getData(['areaType' => 'overview']);
    }

    /**
     * @throws \Http\Client\Exception
     *
     * @return array|null
     */
    public function byNation(): ?array
    {
        return $this->getData(['areaType' => 'nation']);
    }

    /**
     * @param \PHECovid\Model\Nation $nation
     *
     * @throws \Http\Client\Exception
     *
     * @return array|null
     */
    public function forNation(Nation $nation): ?array
    {
        return $this->getData(['areaType' => 'nation', 'areaName' => $nation->getName()]);
    }

    /**
     * @throws \Http\Client\Exception
     *
     * @return array|null
     */
    public function byRegion(): ?array
    {
        return $this->getData(['areaType' => 'region']);
    }

    /**
     * @param \PHECovid\Model\Region $region
     *
     * @throws \Http\Client\Exception
     *
     * @return array|null
     */
    public function forRegion(Region $region): ?array
    {
        return $this->getData(['areaType' => 'region', 'areaName' => $region->getName()]);
    }

    /**
     * @throws \Http\Client\Exception
     *
     * @return array|null
     */
    public function byUtla(): ?array
    {
        return $this->getData(['areaType' => 'utla']);
    }

    /**
     * @param \PHECovid\Model\Utla $utla
     *
     * @throws \Http\Client\Exception
     *
     * @return array|null
     */
    public function forUtla(Utla $utla): ?array
    {
        return $this->getData(['areaType' => 'utla', 'areaName' => $utla->getName()]);
    }

    /**
     * @throws \Http\Client\Exception
     *
     * @return array|null
     */
    public function byLtla(): ?array
    {
        return $this->getData(['areaType' => 'ltla']);
    }

    /**
     * @param Ltla $ltla
     *
     * @throws \Http\Client\Exception
     *
     * @return array|null
     */
    public function forLtla(Ltla $ltla): ?array
    {
        return $this->getData(['areaType' => 'ltla', 'areaName' => $ltla->getName()]);
    }

    /**
     * @param array<string,string> $filters
     *
     * @throws \Http\Client\Exception
     *
     * @return array|null
     */
    protected function getData(array $filters): ?array
    {
        return $this->get('data', \array_filter([
            'filters'   => $this->buildFilters($filters),
            'structure' => JsonArray::encode($this->structure),
            'latestBy'  => $this->latestBy,
        ]));
    }

    /**
     * @param array<string,string> $filters
     *
     * @return string
     */
    private function buildFilters(array $filters): string
    {
        $output = '';

        if ($this->date !== null) {
            $filters['date'] = $this->date->getTimestamp();
        }

        foreach (\array_filter($filters) as $key => $value) {
            $output .= \sprintf('%s=%s;', $key, $value);
        }

        return \rtrim($output, ';');
    }
}
