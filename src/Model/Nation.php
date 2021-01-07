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
final class Nation
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
     * @return \PHECovid\Model\Nation
     */
    public static function england(): self
    {
        return new self('England', 'E92000001');
    }

    /**
     * @return \PHECovid\Model\Nation
     */
    public static function northernIreland(): self
    {
        return new self('Northern Ireland', 'N92000002');
    }

    /**
     * @return \PHECovid\Model\Nation
     */
    public static function scotland(): self
    {
        return new self('Scotland', 'S92000003');
    }

    /**
     * @return \PHECovid\Model\Nation
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
        if (null === $this->code) {
            throw new \BadMethodCallException('Area code not available.');
        }

        return $this->code;
    }
}
