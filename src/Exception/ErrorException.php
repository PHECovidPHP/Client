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

namespace PHECovid\Exception;

/**
 * @author Graham Campbell <graham@alt-three.com>
 */
class ErrorException extends \ErrorException implements ExceptionInterface
{
}
