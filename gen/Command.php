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

namespace PHECovid\Gen\Client;

/**
 * @internal
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
final class Command
{
    /**
     * @var \PHECovid\Gen\Client\Fetcher
     */
    private $fetcher;

    private function __construct(Fetcher $fetcher)
    {
        $this->fetcher = $fetcher;
    }

    public static function create(): self
    {
        return new self(Fetcher::create());
    }

    public function run(): int
    {
        $this->generateNation($this->fetcher->fetchNationData());
        $this->generateRegion($this->fetcher->fetchRegionData());
        $this->generateUtla($this->fetcher->fetchUtlaData());
        $this->generateLtla($this->fetcher->fetchLtlaData());
        $this->generateMsoa($this->fetcher->fetchMsoaData());

        return 0;
    }

    private function generateNation(array $map): void
    {
        $filename = \sprintf('%s/../src/Model/Nation.php', __DIR__);
        $content = Generator::generateNation($map);

        \file_put_contents($filename, $content);
        echo \sprintf("Written %s\n", \basename($filename));
    }

    private function generateRegion(array $map): void
    {
        $filename = \sprintf('%s/../src/Model/Region.php', __DIR__);
        $content = Generator::generateRegion($map);

        \file_put_contents($filename, $content);
        echo \sprintf("Written %s\n", \basename($filename));
    }

    private function generateUtla(array $map): void
    {
        $filename = \sprintf('%s/../src/Model/Utla.php', __DIR__);
        $content = Generator::generateUtla($map);

        \file_put_contents($filename, $content);
        echo \sprintf("Written %s\n", \basename($filename));
    }

    private function generateLtla(array $map): void
    {
        $filename = \sprintf('%s/../src/Model/Ltla.php', __DIR__);
        $content = Generator::generateLtla($map);

        \file_put_contents($filename, $content);
        echo \sprintf("Written %s\n", \basename($filename));
    }

    private function generateMsoa(array $map): void
    {
        $filename = \sprintf('%s/../src/Model/Msoa.php', __DIR__);
        $content = Generator::generateMsoa($map);

        \file_put_contents($filename, $content);
        echo \sprintf("Written %s\n", \basename($filename));
    }
}
