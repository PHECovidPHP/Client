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

namespace PHECovid\Client;

use Generator;
use PHECovid\Client\Api\AbstractApi;
use PHECovid\Client\Exception\RuntimeException;
use PHECovid\Client\HttpClient\Message\ResponseMediator;

/**
 * This is the result pager class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
final class ResultPager implements ResultPagerInterface
{
    /**
     * The client to use for pagination.
     *
     * @var Client
     */
    private $client;

    /**
     * The pagination result from the API.
     *
     * @var array<string,string>
     */
    private $pagination;

    /**
     * Create a new result pager instance.
     *
     * @param \PHECovid\Client\Client $client
     *
     * @return void
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
        $this->pagination = [];
    }

    /**
     * Fetch a single result from an api call.
     *
     * @param \PHECovid\Client\Api\AbstractApi $api
     * @param string                           $method
     * @param array                            $parameters
     *
     * @throws \Http\Client\Exception
     *
     * @return array
     */
    public function fetch(AbstractApi $api, string $method, array $parameters = []): array
    {
        /** @var mixed */
        $result = $api->$method(...$parameters);

        if (!\is_array($result)) {
            throw new RuntimeException('Pagination of this endpoint is not supported.');
        }

        $this->postFetch();

        return $result;
    }

    /**
     * Fetch all results from an api call.
     *
     * @param \PHECovid\Client\Api\AbstractApi $api
     * @param string                           $method
     * @param array                            $parameters
     *
     * @throws \Http\Client\Exception
     *
     * @return array
     */
    public function fetchAll(AbstractApi $api, string $method, array $parameters = []): array
    {
        return \iterator_to_array($this->fetchAllLazy($api, $method, $parameters));
    }

    /**
     * Lazily fetch all results from an api call.
     *
     * @param \PHECovid\Client\Api\AbstractApi $api
     * @param string                           $method
     * @param array                            $parameters
     *
     * @throws \Http\Client\Exception
     *
     * @return \Generator
     */
    public function fetchAllLazy(AbstractApi $api, string $method, array $parameters = []): Generator
    {
        /** @var mixed $value */
        foreach (self::getData($this->fetch($api, $method, $parameters)) as $value) {
            yield $value;
        }

        while ($this->hasNext()) {
            /** @var mixed $value */
            foreach (self::getData($this->fetchNext()) as $value) {
                yield $value;
            }
        }
    }

    /**
     * Check to determine the availability of a next page.
     *
     * @return bool
     */
    public function hasNext(): bool
    {
        return isset($this->pagination['next']);
    }

    /**
     * Fetch the next page.
     *
     * @throws \Http\Client\Exception
     *
     * @return array
     */
    public function fetchNext(): array
    {
        return $this->get('next');
    }

    /**
     * Check to determine the availability of a previous page.
     *
     * @return bool
     */
    public function hasPrevious(): bool
    {
        return isset($this->pagination['previous']);
    }

    /**
     * Fetch the previous page.
     *
     * @throws \Http\Client\Exception
     *
     * @return array
     */
    public function fetchPrevious(): array
    {
        return $this->get('previous');
    }

    /**
     * Refresh the pagination property.
     *
     * @return void
     */
    private function postFetch(): void
    {
        $response = $this->client->getLastResponse();

        $this->pagination = null === $response ? [] : ResponseMediator::getPagination($response);
    }

    /**
     * @param string $key
     *
     * @throws \Http\Client\Exception
     *
     * @return array
     */
    private function get(string $key): array
    {
        $pagination = $this->pagination[$key] ?? null;

        if (null === $pagination) {
            return [];
        }

        $result = $this->client->getHttpClient()->get($pagination);

        $content = ResponseMediator::getContent($result);

        $this->postFetch();

        if (!\is_array($content)) {
            throw new RuntimeException('Pagination of this endpoint is not supported.');
        }

        return $content;
    }

    /**
     * @param array $result
     *
     * @throws \PHECovid\Client\Exception\RuntimeException
     *
     * @return array
     */
    private static function getData(array $result): array
    {
        if (!isset($result['data']) || !\is_array($result['data'])) {
            throw new RuntimeException('Pagination of this endpoint is not supported.');
        }

        return $result['data'];
    }
}
