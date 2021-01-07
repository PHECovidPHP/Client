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

namespace PHECovid\Model;

/**
 * @author Graham Campbell <graham@alt-three.com>
 */
final class Cases
{
    /**
     * @var \PHECovid\Model\Date
     */
    private $date;

    /**
     * @var int
     */
    private $rollingSum;

    /**
     * @var float
     */
    private $rollingChange;

    /**
     * @var int
     */
    private $change;

    /**
     * @var float
     */
    private $changePercentage;

    /**
     * @param \PHECovid\Model\Date $date
     * @param int                  $rollingSum
     * @param float                $rollingChange
     * @param int                  $change
     * @param float                $changePercentage
     *
     * @return void
     */
    private function __construct(Date $date, int $rollingSum, float $rollingChange, int $change, float $changePercentage)
    {
        $this->date = $date;
        $this->rollingSum = $rollingSum;
        $this->rollingChange = $rollingChange;
        $this->change = $change;
        $this->changePercentage = $changePercentage;
    }

    /**
     * @param string    $date
     * @param int       $rollingSum
     * @param int|float $rollingChange
     * @param int       $change
     * @param int|float $changePercentage
     *
     * @return \PHECovid\Model\Cases
     */
    public static function create(string $date, int $rollingSum, $rollingChange, int $change, $changePercentage): self
    {
        if ($rollingSum < 0) {
            throw new \ValueError(self::class.'::create(): Argument #2 ($rollingSum) must be non-negative');
        }

        if (!\is_int($rollingChange) && !\is_float($rollingChange)) {
            throw new \TypeError(self::class.'::create(): Argument #3 ($rollingChange) must be of type int|float');
        }

        if (!\is_int($changePercentage) && !\is_float($changePercentage)) {
            throw new \TypeError(self::class.'::create(): Argument #5 ($changePercentage) must be of type int|float');
        }

        return new self(Date::createFromTimestamp($date), $rollingSum, (float) $rollingChange, $change, (float) $changePercentage);
    }

    /**
     * @return \PHECovid\Model\Date
     */
    public function getDate(): Date
    {
        return $this->date;
    }

    /**
     * @return int
     */
    public function getRollingSum(): int
    {
        return $this->rollingSum;
    }

    /**
     * @return float
     */
    public function getRollingChange(): float
    {
        return $this->rollingChange;
    }

    /**
     * @return int
     */
    public function getChange(): int
    {
        return $this->change;
    }

    /**
     * @return float
     */
    public function getChangePercentage(): float
    {
        return $this->changePercentage;
    }
}
