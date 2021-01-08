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

namespace PHECovid\Tests\Client;

use DateInterval;
use DateTimeImmutable;
use PHECovid\Client\Client;
use PHECovid\Client\Model\Date;
use PHECovid\Client\Model\Msoa;
use PHECovid\Client\Model\Postcode;
use PHPUnit\Framework\TestCase;

/**
 * @author Graham Campbell <graham@alt-three.com>
 */
final class IntegrationTest extends TestCase
{
    public function testDataV2(): void
    {
        $client = new Client();
        $data = $client->dataV2(Date::fromDateTime((new DateTimeImmutable())->sub(new DateInterval('P3M'))));

        $postcode = Postcode::create('YO318RT');

        $this->assertIsArray($data->forMsoa($postcode->getMsoa()));
        $this->assertIsArray($data->forLtla($postcode->getMsoa()->getLtla()));
    }
}
