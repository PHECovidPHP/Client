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
use PHECovid\Exception\RuntimeException;
use PHECovid\Model\Cases;
use PHECovid\Model\Date;
use PHECovid\Model\Ltla;
use PHECovid\Model\Msoa;
use PHECovid\Model\Region;
use PHECovid\Model\Utla;

/**
 * The data V2 API class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class DataV2 extends AbstractApi
{
    /**
     * @var \PHECovid\Model\Date|null
     */
    protected $since;

    /**
     * Create a new data API instance.
     *
     * @param \PHECovid\Client          $client
     * @param \PHECovid\Model\Date|null $since
     *
     * @return void
     */
    public function __construct(Client $client, Date $since = null)
    {
        parent::__construct($client);
        $this->since = $since;
    }

    /**
     * @param \PHECovid\Model\Region $region
     *
     * @throws \Http\Client\Exception
     *
     * @return \PHECovid\Model\Cases[]
     */
    public function forRegion(Region $region): array
    {
        return $this->getData('region', $region->getCode());
    }

    /**
     * @param \PHECovid\Model\Utla $utla
     *
     * @throws \Http\Client\Exception
     *
     * @return \PHECovid\Model\Cases[]
     */
    public function forUtla(Utla $utla): array
    {
        return $this->getData('utla', $utla->getCode());
    }

    /**
     * @param \PHECovid\Model\Ltla $ltla
     *
     * @throws \Http\Client\Exception
     *
     * @return \PHECovid\Model\Cases[]
     */
    public function forLtla(Ltla $ltla): array
    {
        return $this->getData('ltla', $ltla->getCode());
    }

    /**
     * @param \PHECovid\Model\Msoa $msoa
     *
     * @throws \Http\Client\Exception
     *
     * @return \PHECovid\Model\Cases[]
     */
    public function forMsoa(Msoa $msoa): array
    {
        return $this->getData('msoa', $msoa->getCode());
    }

    /**
     * @param string $areaType
     * @param string $areaCode
     *
     * @throws \Http\Client\Exception
     *
     * @return \PHECovid\Model\Cases[]
     */
    protected function getData(string $areaType, string $areaCode): array
    {
        $data = $this->get(\sprintf('v2/data?areaType=%s&areaCode=%s&metric=newCasesBySpecimenDateRollingSum&metric=newCasesBySpecimenDateRollingRate&metric=newCasesBySpecimenDateChange&metric=newCasesBySpecimenDateChangePercentage&format=json', $areaType, $areaCode));

        if (null === $data || !isset($data['body']) || [] === $data['body']) {
            throw new RuntimeException('The response body was unexpectedly empty.');
        }

        $results = [];

        if (!\is_array($data['body'])) {
            throw new RuntimeException('The response body was not an array.');
        }

        foreach ($data['body'] as $entry) {
            if (null === $entry['newCasesBySpecimenDateRollingSum'] ?? null) {
                continue;
            }

            /** @var array{date:string, newCasesBySpecimenDateRollingSum:int, newCasesBySpecimenDateRollingRate:int|float, newCasesBySpecimenDateChange:int, newCasesBySpecimenDateChangePercentage:int|float} $entry */
            $cases = Cases::create(
                $entry['date'],
                $entry['newCasesBySpecimenDateRollingSum'],
                $entry['newCasesBySpecimenDateRollingRate'],
                $entry['newCasesBySpecimenDateChange'],
                $entry['newCasesBySpecimenDateChangePercentage']
            );

            if (null !== $this->since && $cases->getDate()->compareTo($this->since) < 0) {
                continue;
            }

            \array_unshift($results, $cases);

            \usort($results, function (Cases $a, Cases $b): int {
                return $a->getDate()->compareTo($b->getDate());
            });
        }

        return \array_values($results);
    }
}
