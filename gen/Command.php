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
        $this->generateClass('Nation', $this->fetcher->fetchAreaData('byNation'));
        $this->generateClass('Region', $this->fetcher->fetchAreaData('byRegion'));
        $this->generateUtla($this->fetcher->fetchAreaData('byUtla'));
        $this->generateLtla($this->fetcher->fetchAreaData('byLtla'));
        $this->generateMsoa($this->fetcher->fetchMsoaData());

        return 0;
    }

    private function generateClass(string $class, array $map): void
    {
        $filename = \sprintf('%s/../src/Model/%s.php', __DIR__, $class);
        $content = Generator::generateClass($class, $map);

        \file_put_contents($filename, $content);
        echo \sprintf("Written %s\n", \basename($filename));
    }

    private function generateUtla( array $map): void
    {
        $filename = \sprintf('%s/../src/Model/Utla.php', __DIR__);
        $content = Generator::generateUtla($map);

        \file_put_contents($filename, $content);
        echo \sprintf("Written %s\n", \basename($filename));
    }

    private function generateLtla( array $map): void
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
