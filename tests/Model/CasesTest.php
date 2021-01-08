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

use PHECovid\Client\Model\Cases;
use PHPUnit\Framework\TestCase;

/**
 * @author Graham Campbell <graham@alt-three.com>
 */
final class CasesTest extends TestCase
{
    public function testCreateWithGoodData1(): void
    {
        $cases = Cases::create('2020-10-28', 42, 7, 20, 10);

        self::assertInstanceOf(Cases::class, $cases);
        self::assertSame('2020-10-28', $cases->getDate()->getTimestamp());
        self::assertSame(42, $cases->getRollingSum());
        self::assertSame(7.0, $cases->getRollingChange());
        self::assertSame(20, $cases->getChange());
        self::assertSame(10.0, $cases->getChangePercentage());
    }

    public function testCreateWithGoodData2(): void
    {
        $cases = Cases::create('2021-01-03', 40, -7.5, -14, -4.5);

        self::assertInstanceOf(Cases::class, $cases);
        self::assertSame('2021-01-03', $cases->getDate()->getTimestamp());
        self::assertSame(40, $cases->getRollingSum());
        self::assertSame(-7.5, $cases->getRollingChange());
        self::assertSame(-14, $cases->getChange());
        self::assertSame(-4.5, $cases->getChangePercentage());
    }

    public static function provideBadValueCasess()
    {
        return [
            ['2019-01-03', 40, -7.5, -14, -4.5],
            ['2020-04-06', -40, -7.5, -14, -4.5],
        ];
    }

    /**
     * @dataProvider provideBadValueCasess
     */
    public function testCreateWithBadValueData(string $date, int $rollingSum, $rollingChange, int $change, $changePercentage): void
    {
        $this->expectException(\ValueError::class);

        Cases::create($date, $rollingSum, $rollingChange, $change, $changePercentage);
    }

    public static function provideBadTypeCasess()
    {
        return [
            ['2020-04-06', false, 5, -14, -4.5],
            ['2020-04-06', 40, '7.5', -14, -4.5],
            ['2020-04-06', 40, 7.5, '', 12],
            ['2020-04-06', 40, 7.5, 14, false],
        ];
    }

    /**
     * @dataProvider provideBadTypeCasess
     */
    public function testCreateWithBadTypeData(string $date, $rollingSum, $rollingChange, $change, $changePercentage): void
    {
        $this->expectException(\TypeError::class);

        Cases::create($date, $rollingSum, $rollingChange, $change, $changePercentage);
    }
}
