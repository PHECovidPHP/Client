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
     * @param string $name
     *
     * @return void
     */
    private function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return \PHECovid\Model\Nation
     */
    public static function england(): self
    {
        return new self('England');
    }

    /**
     * @return \PHECovid\Model\Nation
     */
    public static function northernIreland(): self
    {
        return new self('Northern Ireland');
    }

    /**
     * @return \PHECovid\Model\Nation
     */
    public static function scotland(): self
    {
        return new self('Scotland');
    }

    /**
     * @return \PHECovid\Model\Nation
     */
    public static function wales(): self
    {
        return new self('Wales');
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
