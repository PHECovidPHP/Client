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

namespace PHECovid\Model;

/**
 * @author Graham Campbell <graham@alt-three.com>
 */
final class Region
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string|null
     */
    private $code;

    /**
     * @param string      $name
     * @param string|null $code
     *
     * @return void
     */
    private function __construct(string $name, ?string $code)
    {
        $this->name = $name;
        $this->code = $code;
    }

    /**
     * @return \PHECovid\Model\Region
     */
    public static function eastMidlands(): self
    {
        return new self('East Midlands', 'E12000004');
    }

    /**
     * @return \PHECovid\Model\Region
     */
    public static function eastOfEngland(): self
    {
        return new self('East of England', 'E12000006');
    }

    /**
     * @return \PHECovid\Model\Region
     */
    public static function london(): self
    {
        return new self('London', 'E12000007');
    }

    /**
     * @return \PHECovid\Model\Region
     */
    public static function northEast(): self
    {
        return new self('North East', 'E12000001');
    }

    /**
     * @return \PHECovid\Model\Region
     */
    public static function northWest(): self
    {
        return new self('North West', 'E12000002');
    }

    /**
     * @return \PHECovid\Model\Region
     */
    public static function southEast(): self
    {
        return new self('South East', 'E12000008');
    }

    /**
     * @return \PHECovid\Model\Region
     */
    public static function southWest(): self
    {
        return new self('South West', 'E12000009');
    }

    /**
     * @return \PHECovid\Model\Region
     */
    public static function westMidlands(): self
    {
        return new self('West Midlands', 'E12000005');
    }

    /**
     * @return \PHECovid\Model\Region
     */
    public static function yorkshireAndTheHumber(): self
    {
        return new self('Yorkshire and The Humber', 'E12000003');
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        if (null === $this->code) {
            throw new \BadMethodCallException('Area code not available.');
        }

        return $this->code;
    }
}
