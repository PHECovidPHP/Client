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

use PHECovid\Client\Model\Region;
use PHPUnit\Framework\TestCase;

/**
 * @author Graham Campbell <graham@alt-three.com>
 */
final class RegionTest extends TestCase
{
    public function testDirectCreate(): void
    {
        $region = Region::london();

        self::assertInstanceOf(Region::class, $region);
        self::assertSame('London', $region->getName());
        self::assertSame('E12000007', $region->getCode());
    }

    public function testCreateWithValidCode(): void
    {
        $region = Region::fromCode('E12000008');

        self::assertInstanceOf(Region::class, $region);
        self::assertSame('South East', $region->getName());
        self::assertSame('E12000008', $region->getCode());
    }

    public function testCreateWithInvalidCode(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        Region::fromCode('E666666');
    }
}
