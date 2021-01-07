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

namespace PHECovid;

use Http\Client\Common\HttpMethodsClientInterface;
use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\HeaderDefaultsPlugin;
use Http\Client\Common\Plugin\HistoryPlugin;
use Http\Client\Common\Plugin\RedirectPlugin;
use Http\Discovery\Psr17FactoryDiscovery;
use PHECovid\Api\DataV1;
use PHECovid\Api\DataV2;
use PHECovid\HttpClient\Builder;
use PHECovid\HttpClient\Message\ResponseMediator;
use PHECovid\HttpClient\Plugin\ExceptionThrower;
use PHECovid\HttpClient\Plugin\History;
use PHECovid\Model\Date;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * The API client.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class Client
{
    /**
     * The default base URL.
     *
     * @var string
     */
    private const BASE_URL = 'https://api.coronavirus.data.gov.uk';

    /**
     * The default user agent header.
     *
     * @var string
     */
    private const USER_AGENT = 'covid-php-api-client/2.0';

    /**
     * The HTTP client builder.
     *
     * @var \PHECovid\HttpClient\Builder
     */
    private $httpClientBuilder;

    /**
     * The response history plugin.
     *
     * @var \PHECovid\HttpClient\Plugin\History
     */
    private $responseHistory;

    /**
     * Create a new API client instance.
     *
     * @param \PHECovid\HttpClient\Builder|null $httpClientBuilder
     *
     * @return void
     */
    public function __construct(Builder $httpClientBuilder = null)
    {
        $this->httpClientBuilder = $builder = $httpClientBuilder ?? new Builder();
        $this->responseHistory = new History();

        $builder->addPlugin(new ExceptionThrower());
        $builder->addPlugin(new HistoryPlugin($this->responseHistory));
        $builder->addPlugin(new RedirectPlugin());

        $builder->addPlugin(new HeaderDefaultsPlugin([
            'Accept' => ResponseMediator::JSON_CONTENT_TYPE,
            'User-Agent' => self::USER_AGENT,
        ]));

        $this->setUrl(self::BASE_URL);
    }

    /**
     * Create a API client using an HTTP client.
     *
     * @param \Psr\Http\Client\ClientInterface $httpClient
     *
     * @return \PHECovid\Client
     */
    public static function createWithHttpClient(ClientInterface $httpClient): self
    {
        $builder = new Builder($httpClient);

        return new self($builder);
    }

    /**
     * @param array                $structure
     * @param \PHECovid\Model\Date $date
     * @param string|null          $latestBy
     *
     * @return \PHECovid\Api\DataV1
     */
    public function dataV1(array $structure, Date $date = null, string $latestBy = null): DataV1
    {
        return new DataV1($this, $structure, $date, $latestBy);
    }

    /**
     * @param \PHECovid\Model\Date|null $since
     *
     * @return \PHECovid\Api\DataV2
     */
    public function dataV2(Date $since = null): DataV2
    {
        return new DataV2($this, $since);
    }

    /**
     * Set the base URL.
     *
     * @param string $url
     *
     * @return void
     */
    public function setUrl(string $url): void
    {
        $this->httpClientBuilder->removePlugin(AddHostPlugin::class);
        $this->httpClientBuilder->addPlugin(new AddHostPlugin(Psr17FactoryDiscovery::findUriFactory()->createUri($url)));
    }

    /**
     * Get the last response.
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function getLastResponse(): ?ResponseInterface
    {
        return $this->responseHistory->getLastResponse();
    }

    /**
     * Get the HTTP client.
     *
     * @return \Http\Client\Common\HttpMethodsClientInterface
     */
    public function getHttpClient(): HttpMethodsClientInterface
    {
        return $this->getHttpClientBuilder()->getHttpClient();
    }

    /**
     * Get the HTTP client builder.
     *
     * @return \PHECovid\HttpClient\Builder
     */
    protected function getHttpClientBuilder(): Builder
    {
        return $this->httpClientBuilder;
    }
}
