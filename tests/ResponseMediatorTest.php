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

use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Utils;
use PHECovid\Client\Exception\RuntimeException;
use PHECovid\Client\HttpClient\Message\ResponseMediator;
use PHPUnit\Framework\TestCase;

/**
 * @author Graham Campbell <graham@alt-three.com>
 */
class ResponseMediatorTest extends TestCase
{
    public function testGetContent(): void
    {
        $response = new Response(
            200,
            ['Content-Type' => 'application/vnd.PHE-COVID19.v1+json'],
            Utils::streamFor('{"foo": "bar"}')
        );

        $this->assertSame(['foo' => 'bar'], ResponseMediator::getContent($response));
    }

    public function testGetContentInvalidJson(): void
    {
        $body = 'foobar';
        $response = new Response(
            200,
            ['Content-Type' => 'application/vnd.PHE-COVID19.v1+json'],
            Utils::streamFor($body)
        );

        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('json_decode error: Syntax error');

        ResponseMediator::getContent($response);
    }

    public function testGetErrrorMessageInvalidJson(): void
    {
        $body = 'foobar';
        $response = new Response(
            200,
            ['Content-Type' => 'application/vnd.PHE-COVID19.v1+json'],
            Utils::streamFor($body)
        );

        $this->assertNull(ResponseMediator::getErrorMessage($response));
    }
}
