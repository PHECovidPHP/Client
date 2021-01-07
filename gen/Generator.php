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

/**
 * This is the generator class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
final class Generator
{
    private const FILE_TEMPLATE = '<?php

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
final class %s
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string|null
     */
    private $code;

    /**
     * @param string      $name
     * @param string|null $code
     *
     * @return void
     */
    private function __construct(string $name, ?string $code)
    {
        $this->name = $name;
        $this->code = $code;
    }
%s
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        if (null === $this->code) {
            throw new \BadMethodCallException(\'Area code not available.\');
        }

        return $this->code;
    }
}
';

    private const METHOD_TEMPLATE = '
    /**
     * @return \PHECovid\Model\%s
     */
    public static function %s(): self
    {
        return new self(%s, %s);
    }
';

    public static function generate(string $class, array $map): string
    {
        return \sprintf(self::FILE_TEMPLATE, $class, self::generateMethods($class, $map));
    }

    private static function generateMethods(string $class, array $map): string
    {
        $output = '';

        foreach ($map as $code => $data) {
            $output .= self::generateMethod($class, $code, $data['name'], $data['la'] ?? null);
        }

        return $output;
    }

    private static function generateMethod(string $class, string $code, string $name, ?string $la): string
    {
        return \sprintf(
            self::METHOD_TEMPLATE,
            $class,
            \lcfirst(\str_replace([' ', ',', '.'], ['', '', ''], \ucwords(\str_replace(['\'', '!', '-', '(', ')', '&'], ['', '', ' ', ' ', ' ', 'and'], null === $la ? $name : \sprintf('%s %s', $la, $name))))),
            \sprintf('\'%s\'', \str_replace('\'', '\\\'', $name)),
            'null' === $code ? 'null' : \sprintf('\'%s\'', $code)
        );
    }
}
