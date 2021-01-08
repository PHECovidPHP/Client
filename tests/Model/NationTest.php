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

use PHECovid\Client\Model\Nation;
use PHPUnit\Framework\TestCase;

/**
 * @author Graham Campbell <graham@alt-three.com>
 */
final class NationTest extends TestCase
{
    public function testDirectCreate(): void
    {
        $nation = Nation::england();

        self::assertInstanceOf(Nation::class, $nation);
        self::assertSame('England', $nation->getName());
        self::assertSame('E92000001', $nation->getCode());
    }

    public function testCreateWithValidCode(): void
    {
        $nation = Nation::fromCode('S92000003');

        self::assertInstanceOf(Nation::class, $nation);
        self::assertSame('Scotland', $nation->getName());
        self::assertSame('S92000003', $nation->getCode());
    }

    public function testCreateWithInvalidCode(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        Nation::fromCode('E666666');
    }
}
