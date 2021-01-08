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

namespace PHECovid\Tests\Client\Model;

use PHECovid\Client\Model\Date;
use PHPUnit\Framework\TestCase;

/**
 * @author Graham Campbell <graham@alt-three.com>
 */
final class DateTest extends TestCase
{
    public function testCreateWithGoodData1(): void
    {
        $date = Date::create(2020, 10, 28);

        self::assertInstanceOf(Date::class, $date);
        self::assertSame(2020, $date->getYear());
        self::assertSame(10, $date->getMonth());
        self::assertSame(28, $date->getDay());
        self::assertSame('2020-10-28', $date->getTimestamp());
    }

    public function testCreateWithGoodData2(): void
    {
        $date = Date::create(2021, 1, 3);

        self::assertInstanceOf(Date::class, $date);
        self::assertSame(2021, $date->getYear());
        self::assertSame(1, $date->getMonth());
        self::assertSame(3, $date->getDay());
        self::assertSame('2021-01-03', $date->getTimestamp());
    }

    public static function provideBadDates()
    {
        return [
            [2020, 10, 32],
            [2019, 11, 11],
        ];
    }

    /**
     * @dataProvider provideBadDates
     */
    public function testCreateWithBadData(int $year, int $month, int $day): void
    {
        $this->expectException(\ValueError::class);

        Date::create($year, $month, $day);
    }

    public function testFromTimestampWithGoodData1(): void
    {
        $date = Date::fromTimestamp('2020-07-20');

        self::assertInstanceOf(Date::class, $date);
        self::assertSame(2020, $date->getYear());
        self::assertSame(7, $date->getMonth());
        self::assertSame(20, $date->getDay());
        self::assertSame('2020-07-20', $date->getTimestamp());
    }

    public function testFromTimestampWithGoodData2(): void
    {
        $date = Date::fromTimestamp('2021-12-11');

        self::assertInstanceOf(Date::class, $date);
        self::assertSame(2021, $date->getYear());
        self::assertSame(12, $date->getMonth());
        self::assertSame(11, $date->getDay());
        self::assertSame('2021-12-11', $date->getTimestamp());
    }

    public static function provideBadTimestamps()
    {
        return [
            ['2020-10-32'],
            ['2019-11-11'],
            ['2020-11-1'],
            ['2020-11-aa'],
            ['2020-11-01-01'],
            ['2020'],
            [''],
        ];
    }

    /**
     * @dataProvider provideBadTimestamps
     */
    public function testFromTimestampWithBadData(string $timestamp): void
    {
        $this->expectException(\ValueError::class);

        Date::fromTimestamp('');
    }

    public function testFromValidDateTime(): void
    {
        $date = Date::fromDateTime(\DateTimeImmutable::createFromFormat('U', (string) strtotime('2020-04-12')));

        self::assertInstanceOf(Date::class, $date);
        self::assertSame(2020, $date->getYear());
        self::assertSame(04, $date->getMonth());
        self::assertSame(12, $date->getDay());
        self::assertSame('2020-04-12', $date->getTimestamp());
    }

    public function testFromInvalidDateTime(): void
    {
        $this->expectException(\ValueError::class);

        Date::fromDateTime(\DateTimeImmutable::createFromFormat('U', '10000'));
    }

    public function testComparingDates(): void
    {
        self::assertSame(-1, Date::fromTimestamp('2020-07-20')->compareTo(Date::fromTimestamp('2020-07-21')));
        self::assertSame(0, Date::fromTimestamp('2020-07-20')->compareTo(Date::fromTimestamp('2020-07-20')));
        self::assertSame(1, Date::fromTimestamp('2020-07-20')->compareTo(Date::fromTimestamp('2020-07-19')));
    }
}
