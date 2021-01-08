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

use PHECovid\Client\Model\Utla;
use PHPUnit\Framework\TestCase;

/**
 * @author Graham Campbell <graham@alt-three.com>
 */
final class UtlaTest extends TestCase
{
    public function testDirectCreate(): void
    {
        $utla = Utla::aberdeenshire();

        self::assertInstanceOf(Utla::class, $utla);
        self::assertSame('Aberdeenshire', $utla->getName());
        self::assertSame('S12000034', $utla->getCode());
    }

    public function testCreateWithValidCode(): void
    {
        $utla = Utla::fromCode('W06000015');

        self::assertInstanceOf(Utla::class, $utla);
        self::assertSame('Cardiff', $utla->getName());
        self::assertSame('W06000015', $utla->getCode());
    }

    public function testCreateWithInvalidCode(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        Utla::fromCode('E666666');
    }
}
