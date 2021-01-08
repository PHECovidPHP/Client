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
final class Nation
{
    /**
     * @var array<string,string>
     */
    private const CODE_TO_METHOD = [
        'E92000001' => 'england',
        'N92000002' => 'northernIreland',
        'S92000003' => 'scotland',
        'W92000004' => 'wales',
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
     * @return \PHECovid\Client\Model\Nation
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
     * @return \PHECovid\Client\Model\Nation
     */
    public static function england(): self
    {
        return new self('England', 'E92000001');
    }

    /**
     * @return \PHECovid\Client\Model\Nation
     */
    public static function northernIreland(): self
    {
        return new self('Northern Ireland', 'N92000002');
    }

    /**
     * @return \PHECovid\Client\Model\Nation
     */
    public static function scotland(): self
    {
        return new self('Scotland', 'S92000003');
    }

    /**
     * @return \PHECovid\Client\Model\Nation
     */
    public static function wales(): self
    {
        return new self('Wales', 'W92000004');
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
}
