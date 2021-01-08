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

namespace PHECovid\Client\HttpClient\Plugin;

use Http\Client\Common\Plugin;
use Http\Promise\Promise;
use PHECovid\Client\Exception\ApiLimitExceededException;
use PHECovid\Client\Exception\ExceptionInterface;
use PHECovid\Client\Exception\RuntimeException;
use PHECovid\Client\Exception\ValidationFailedException;
use PHECovid\Client\HttpClient\Message\ResponseMediator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * A plugin to throw exceptions.
 *
 * @internal
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
final class ExceptionThrower implements Plugin
{
    /**
     * Handle the request and return the response coming from the next callable.
     *
     * @param \Psr\Http\Message\RequestInterface                     $request
     * @param callable(RequestInterface): Promise<ResponseInterface> $next
     * @param callable(RequestInterface): Promise<ResponseInterface> $first
     *
     * @return \Http\Promise\Promise<ResponseInterface>
     */
    public function handleRequest(RequestInterface $request, callable $next, callable $first): Promise
    {
        return $next($request)->then(function (ResponseInterface $response): ResponseInterface {
            $status = $response->getStatusCode();

            if ($status >= 400 && $status < 600) {
                throw self::createException($status, ResponseMediator::getErrorMessage($response) ?? $response->getReasonPhrase());
            }

            return $response;
        });
    }

    /**
     * Create an exception from a status code and error message.
     *
     * @param int    $status
     * @param string $message
     *
     * @return \PHECovid\Client\Exception\ErrorException|\PHECovid\Client\Exception\RuntimeException
     */
    private static function createException(int $status, string $message): ExceptionInterface
    {
        if (400 === $status || 404 === $status || 412 === $status || 413 === $status || 417 === $status || 422 === $status) {
            return new ValidationFailedException($message, $status);
        }

        if (429 === $status) {
            return new ApiLimitExceededException($message, $status);
        }

        return new RuntimeException($message, $status);
    }
}
