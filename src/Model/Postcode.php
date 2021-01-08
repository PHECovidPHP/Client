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

namespace PHECovid\Client\Model;

/**
 * @author Graham Campbell <graham@alt-three.com>
 */
final class Postcode
{
    /**
     * @var string
     */
    private $outwardCode;

    /**
     * @var string
     */
    private $inwardCode;

    /**
     * @var string
     */
    private $msoaCode;

    /**
     * @param string $outwardCode
     * @param string $inwardCode
     * @param string $msoaCode
     *
     * @return void
     */
    private function __construct(string $outwardCode, string $inwardCode, string $msoaCode)
    {
        $this->outwardCode = $outwardCode;
        $this->inwardCode = $inwardCode;
        $this->msoaCode = $msoaCode;
    }

    /**
     * @param string $postcode
     *
     * @return \PHECovid\Client\Model\Postcode
     */
    public static function create(string $postcode): self
    {
        $processed = \PHECovid\Postcodes\Postcode::create($postcode);

        return new self(
            $processed->getOutwardCode(),
            $processed->getInwardCode(),
            $processed->getMsoaCode()
        );
    }

    /**
     * @return string
     */
    public function getOutwardCode(): string
    {
        return $this->outwardCode;
    }

    /**
     * @return string
     */
    public function getInwardCode(): string
    {
        return $this->inwardCode;
    }

    /**
     * @return string
     */
    public function getPostcode(): string
    {
        return \sprintf('%s %s', $this->outwardCode, $this->inwardCode);
    }

    /**
     * @return \PHECovid\Client\Model\Msoa
     */
    public function getMsoa(): Msoa
    {
        return Msoa::fromCode($this->msoaCode);
    }
}
