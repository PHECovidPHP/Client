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

namespace PHECovid\Client\Model;

/**
 * @author Graham Campbell <graham@alt-three.com>
 */
final class Region
{
    /**
     * @var array<string,string>
     */
    private const CODE_TO_METHOD = [
        'E12000004' => 'eastMidlands',
        'E12000006' => 'eastOfEngland',
        'E12000007' => 'london',
        'E12000001' => 'northEast',
        'E12000002' => 'northWest',
        'E12000008' => 'southEast',
        'E12000009' => 'southWest',
        'E12000005' => 'westMidlands',
        'E12000003' => 'yorkshireAndTheHumber',
    ];

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $code;

    /**
     * @param string $name
     * @param string $code
     *
     * @return void
     */
    private function __construct(string $name, string $code)
    {
        $this->name = $name;
        $this->code = $code;
    }

    /**
     * @param string $code
     *
     * @return \PHECovid\Client\Model\Region
     */
    public static function fromCode(string $code): self
    {
        $method = self::CODE_TO_METHOD[$code] ?? null;

        if (null === $method) {
            throw new \InvalidArgumentException('Unknown area code.');
        }

        return self::$method();
    }

    /**
     * @return \PHECovid\Client\Model\Region
     */
    public static function eastMidlands(): self
    {
        return new self('East Midlands', 'E12000004');
    }

    /**
     * @return \PHECovid\Client\Model\Region
     */
    public static function eastOfEngland(): self
    {
        return new self('East of England', 'E12000006');
    }

    /**
     * @return \PHECovid\Client\Model\Region
     */
    public static function london(): self
    {
        return new self('London', 'E12000007');
    }

    /**
     * @return \PHECovid\Client\Model\Region
     */
    public static function northEast(): self
    {
        return new self('North East', 'E12000001');
    }

    /**
     * @return \PHECovid\Client\Model\Region
     */
    public static function northWest(): self
    {
        return new self('North West', 'E12000002');
    }

    /**
     * @return \PHECovid\Client\Model\Region
     */
    public static function southEast(): self
    {
        return new self('South East', 'E12000008');
    }

    /**
     * @return \PHECovid\Client\Model\Region
     */
    public static function southWest(): self
    {
        return new self('South West', 'E12000009');
    }

    /**
     * @return \PHECovid\Client\Model\Region
     */
    public static function westMidlands(): self
    {
        return new self('West Midlands', 'E12000005');
    }

    /**
     * @return \PHECovid\Client\Model\Region
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
        return $this->code;
    }

    /**
     * @return \PHECovid\Client\Model\Nation
     */
    public function getNation(): Nation
    {
        return Nation::england();
    }
}
