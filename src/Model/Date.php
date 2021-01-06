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

use ValueError;

/**
 * @author Graham Campbell <graham@alt-three.com>
 */
final class Date
{
    /**
     * @var string
     */
    private $timestamp;

    /**
     * @param string $timestamp
     *
     * @return void
     */
    private function __construct(string $timestamp)
    {
        $this->timestamp = $timestamp;
    }

    /**
     * @param int $year
     * @param int $month
     * @param int $day
     *
     * @return \PHECovid\Model\Date
     */
    public static function create(int $year, int $month, int $day): self
    {
        if ($year < 2020 || !\checkdate($month, $day, $year)) {
            throw new ValueError('Invalid date.');
        }

        return new self(\sprintf('%04d-%02d-%02d', $year, $month, $day));
    }

    /**
     * @return string
     */
    public function getTimestamp(): string
    {
        return $this->timestamp;
    }
}
