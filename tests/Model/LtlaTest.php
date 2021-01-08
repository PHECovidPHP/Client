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

use PHECovid\Client\Model\Ltla;
use PHPUnit\Framework\TestCase;

/**
 * @author Graham Campbell <graham@alt-three.com>
 */
final class LtlaTest extends TestCase
{
    public function testDirectCreate(): void
    {
        $ltla = Ltla::ashfield();

        self::assertInstanceOf(Ltla::class, $ltla);
        self::assertSame('Ashfield', $ltla->getName());
        self::assertSame('E07000170', $ltla->getCode());
    }

    public function testCreateWithValidCode(): void
    {
        $ltla = Ltla::fromCode('E07000078');

        self::assertInstanceOf(Ltla::class, $ltla);
        self::assertSame('Cheltenham', $ltla->getName());
        self::assertSame('E07000078', $ltla->getCode());
    }

    public function testCreateWithInvalidCode(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        Ltla::fromCode('E666666');
    }
}
