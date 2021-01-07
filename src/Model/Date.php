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

use DateTimeInterface;

/**
 * @author Graham Campbell <graham@alt-three.com>
 */
final class Date
{
    /**
     * @var int
     */
    private $year;

    /**
     * @var int
     */
    private $month;

    /**
     * @var int
     */
    private $day;

    /**
     * @param int $year
     * @param int $month
     * @param int $day
     *
     * @return void
     */
    private function __construct(int $year, int $month, int $day)
    {
        $this->year = $year;
        $this->month = $month;
        $this->day = $day;
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
            throw new \ValueError(self::class.'::create(): Arguments must represent a valid date on or after 2020-01-01');
        }

        return new self($year, $month, $day);
    }

    /**
     * @param string $timestamp
     *
     * @return \PHECovid\Model\Date
     */
    public static function createFromTimestamp(string $timestamp): self
    {
        if (@\preg_match('#^\d\d\d\d-\d\d-\d\d$#', $timestamp) !== 1) {
            throw new \ValueError(self::class.'::createFromTimestamp(): Argument #1 ($timestamp) must be of the form YYYY-MM-DD');
        }

        return self::create(...\array_map('intval', \explode('-', $timestamp)));
    }

    /**
     * @param \DateTimeInterface $dateTime
     *
     * @return \PHECovid\Model\Date
     */
    public static function createFromDateTime(DateTimeInterface $dateTime): self
    {
        return self::createFromTimestamp($dateTime->format('Y-m-d'));
    }

    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * @return int
     */
    public function getMonth(): int
    {
        return $this->month;
    }

    /**
     * @return int
     */
    public function getDay(): int
    {
        return $this->day;
    }

    /**
     * @return string
     */
    public function getTimestamp(): string
    {
        return \sprintf('%04d-%02d-%02d', $this->year, $this->month, $this->day);
    }

    /**
     * @param \PHECovid\Model\Date $other
     *
     * @return int
     */
    public function compareTo(self $other): int
    {
        $base = \strtotime('2020-01-01');

        return \strtotime($this->getTimestamp(), $base) <=> \strtotime($other->getTimestamp(), $base);
    }
}
