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

namespace PHECovid\Gen;

use PHECovid\Client;
use PHECovid\ResultPager;
use PHECovid\Model\Date;

/**
 * This is the generator class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
final class Command
{
    private function __construct(Client $client)
    {
        $this->client = $client;
    }

    public static function create(): self
    {
        return new self(new Client());
    }

    public function run(): int
    {
        $this->generate('nation');
        $this->generate('region');
        $this->generate('utla');
        $this->generate('ltla');

        return 0;
    }

    private function generate(string $type)
    {
        $filename = \sprintf('%s/../src/Model/%s.php', __DIR__, \ucfirst($type));
        $content = Generator::generate($type, $this->fetchData(\sprintf('by%s', \ucfirst($type))));

        \file_put_contents($filename, $content);
        echo \sprintf("Written %s\n", basename($filename));
    }

    private function fetchData(string $method): array
    {
        $pager = new ResultPager($this->client);

        $data = $this->client->data(
            ['areaName' => 'areaName'],
            Date::create(2020, 12, 30)
        );

        $entries = [];

        foreach ($pager->fetchAll($data, $method) as $raw) {
            $entries[] = $raw['areaName'];
        }

        return $entries;
    }
}
