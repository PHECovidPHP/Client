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

namespace PHECovid\Tests;

use DateInterval;
use DateTimeImmutable;
use PHECovid\Client;
use PHECovid\Model\Date;
use PHECovid\Model\Ltla;
use PHECovid\Model\Msoa;
use PHECovid\Model\Region;
use PHECovid\Model\Utla;
use PHPUnit\Framework\TestCase;

/**
 * @author Graham Campbell <graham@alt-three.com>
 */
final class IntegrationTest extends TestCase
{
    public function testDataV2(): void
    {
        $client = new Client();
        $data = $client->dataV2(Date::createFromDateTime((new DateTimeImmutable())->sub(new DateInterval('P3M'))));
        $this->assertIsArray($data->forMsoa(Msoa::northumberlandPonteland()));
    }
}
