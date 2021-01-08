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

use PHECovid\Client\Model\Msoa;
use PHPUnit\Framework\TestCase;

/**
 * @author Graham Campbell <graham@alt-three.com>
 */
final class MsoaTest extends TestCase
{
    public function testDirectCreate(): void
    {
        $msoa = Msoa::barnetEdgwarePark();

        self::assertInstanceOf(Msoa::class, $msoa);
        self::assertSame('Edgware Park', $msoa->getName());
        self::assertSame('E02000037', $msoa->getCode());
        self::assertSame('E09000003', $msoa->getLtla()->getCode());
    }

    public function testCreateWithValidCode(): void
    {
        $msoa = Msoa::fromCode('E02003726');

        self::assertInstanceOf(Msoa::class, $msoa);
        self::assertSame('Petersfield', $msoa->getName());
        self::assertSame('E02003726', $msoa->getCode());
        self::assertSame('E07000008', $msoa->getLtla()->getCode());
    }

    public function testCreateWithInvalidCode(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        Msoa::fromCode('E666666');
    }
}
