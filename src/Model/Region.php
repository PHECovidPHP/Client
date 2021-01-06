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
     * @param string $name
     *
     * @return void
     */
    private function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return \PHECovid\Model\Region
     */
    public static function eastMidlands(): self
    {
        return new self('East Midlands');
    }

    /**
     * @return \PHECovid\Model\Region
     */
    public static function eastOfEngland(): self
    {
        return new self('East of England');
    }

    /**
     * @return \PHECovid\Model\Region
     */
    public static function london(): self
    {
        return new self('London');
    }

    /**
     * @return \PHECovid\Model\Region
     */
    public static function northEast(): self
    {
        return new self('North East');
    }

    /**
     * @return \PHECovid\Model\Region
     */
    public static function northWest(): self
    {
        return new self('North West');
    }

    /**
     * @return \PHECovid\Model\Region
     */
    public static function southEast(): self
    {
        return new self('South East');
    }

    /**
     * @return \PHECovid\Model\Region
     */
    public static function southWest(): self
    {
        return new self('South West');
    }

    /**
     * @return \PHECovid\Model\Region
     */
    public static function westMidlands(): self
    {
        return new self('West Midlands');
    }

    /**
     * @return \PHECovid\Model\Region
     */
    public static function yorkshireAndTheHumber(): self
    {
        return new self('Yorkshire and The Humber');
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
