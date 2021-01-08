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

namespace PHECovid\Client\Api;

use PHECovid\Client\Client;
use PHECovid\Client\Exception\RuntimeException;
use PHECovid\Client\Model\Cases;
use PHECovid\Client\Model\Date;
use PHECovid\Client\Model\Ltla;
use PHECovid\Client\Model\Msoa;
use PHECovid\Client\Model\Region;
use PHECovid\Client\Model\Utla;

/**
 * The data V2 API class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class DataV2 extends AbstractApi
{
    /**
     * @var \PHECovid\Client\Model\Date|null
     */
    protected $since;

    /**
     * Create a new data API instance.
     *
     * @param \PHECovid\Client\Client          $client
     * @param \PHECovid\Client\Model\Date|null $since
     *
     * @return void
     */
    public function __construct(Client $client, Date $since = null)
    {
        parent::__construct($client);
        $this->since = $since;
    }

    /**
     * @param \PHECovid\Client\Model\Region $region
     *
     * @throws \Http\Client\Exception
     *
     * @return \PHECovid\Client\Model\Cases[]
     */
    public function forRegion(Region $region): array
    {
        return $this->getData('region', $region->getCode());
    }

    /**
     * @param \PHECovid\Client\Model\Utla $utla
     *
     * @throws \Http\Client\Exception
     *
     * @return \PHECovid\Client\Model\Cases[]
     */
    public function forUtla(Utla $utla): array
    {
        return $this->getData('utla', $utla->getCode());
    }

    /**
     * @param \PHECovid\Client\Model\Ltla $ltla
     *
     * @throws \Http\Client\Exception
     *
     * @return \PHECovid\Client\Model\Cases[]
     */
    public function forLtla(Ltla $ltla): array
    {
        return $this->getData('ltla', $ltla->getCode());
    }

    /**
     * @param \PHECovid\Client\Model\Msoa $msoa
     *
     * @throws \Http\Client\Exception
     *
     * @return \PHECovid\Client\Model\Cases[]
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
     * @return \PHECovid\Client\Model\Cases[]
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
