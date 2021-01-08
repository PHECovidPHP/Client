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

namespace PHECovid\Client\HttpClient\Message;

use PHECovid\Client\Exception\RuntimeException;
use PHECovid\Client\HttpClient\Util\JsonArray;
use Psr\Http\Message\ResponseInterface;

/**
 * This is the response mediator class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
final class ResponseMediator
{
    /**
     * The JSON content type identifier.
     *
     * @var string
     */
    public const JSON_CONTENT_TYPE = 'application/json';

    /**
     * Get the decoded response content.
     *
     * If the there is no response body, we will always return the empty array.
     *
     * @param \Psr\Http\Message\ResponseInterface $response
     *
     * @throws \PHECovid\Client\Exception\RuntimeException
     *
     * @return array|null
     */
    public static function getContent(ResponseInterface $response): ?array
    {
        if (204 === $response->getStatusCode()) {
            return null;
        }

        $body = (string) $response->getBody();

        if ('' === $body) {
            throw new RuntimeException('The response body was unexpectedly empty.');
        }

        return JsonArray::decode($body);
    }

    /**
     * Get the pagination data from the response.
     *
     * @param \Psr\Http\Message\ResponseInterface $response
     *
     * @return array<string,string>
     */
    public static function getPagination(ResponseInterface $response): array
    {
        try {
            /** @var array<string,string> */
            return \array_filter(self::getContent($response)['pagination'] ?? []);
        } catch (RuntimeException $e) {
            return [];
        }
    }

    /**
     * Get the error message from the response if present.
     *
     * @param \Psr\Http\Message\ResponseInterface $response
     *
     * @return string|null
     */
    public static function getErrorMessage(ResponseInterface $response): ?string
    {
        try {
            /** @var scalar|array */
            $error = self::getContent($response)['message'] ?? null;
        } catch (RuntimeException $e) {
            return null;
        }

        return \is_string($error) ? $error : null;
    }
}
