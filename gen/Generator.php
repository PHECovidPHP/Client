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

namespace PHECovid\\Client\\Model;

/**
 * @author Graham Campbell <graham@alt-three.com>
 */
final class %s
{
    /**
     * @var array<string,string>
     */
    private const CODE_TO_METHOD = [
%s
    ];

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $code;

    /**
     * @param string $name
     * @param string $code
     *
     * @return void
     */
    private function __construct(string $name, string $code)
    {
        $this->name = $name;
        $this->code = $code;
    }

    /**
     * @param string $code
     *
     * @return \\PHECovid\\Client\\Model\\%s
     */
    public static function fromCode(string $code): self
    {
        $method = self::CODE_TO_METHOD[$code] ?? null;

        if (null === $method) {
            throw new \\InvalidArgumentException(\'Unknown area code.\');
        }

        return self::$method();
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
        return $this->code;
    }
}
';

    private const UTLA_TEMPLATE = '<?php

declare(strict_types=1);

/*
 * This file is part of the PHE Covid API Client.
 *
 * (c) Graham Campbell <graham@alt-three.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHECovid\\Client\\Model;

/**
 * @author Graham Campbell <graham@alt-three.com>
 */
final class Utla
{
    /**
     * @var array<string,string>
     */
    private const CODE_TO_METHOD = [
%s
    ];

    /**
     * @var string
     */
    private $name;

    /**
     * @var string|null
     */
    private $code;

    /**
     * @var string|null
     */
    private $regionCode;

    /**
     * @param string      $name
     * @param string|null $code
     * @param string|null $regionCode
     *
     * @return void
     */
    private function __construct(string $name, ?string $code, ?string $regionCode)
    {
        $this->name = $name;
        $this->code = $code;
        $this->regionCode = $regionCode;
    }

    /**
     * @param string $code
     *
     * @return \\PHECovid\\Client\\Model\\Utla
     */
    public static function fromCode(string $code): self
    {
        $method = self::CODE_TO_METHOD[$code] ?? null;

        if (null === $method) {
            throw new \\InvalidArgumentException(\'Unknown area code.\');
        }

        return self::$method();
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
            throw new \\BadMethodCallException(\'Area code not available.\');
        }

        return $this->code;
    }

    /**
     * @return \\PHECovid\\Client\\Model\\Region
     */
    public function getRegion(): Region
    {
        if (null === $this->regionCode) {
            throw new \\BadMethodCallException(\'Region code not available.\');
        }

        return Region::fromCode($this->utlaCode);
    }
}
';

    private const LTLA_TEMPLATE = '<?php

declare(strict_types=1);

/*
 * This file is part of the PHE Covid API Client.
 *
 * (c) Graham Campbell <graham@alt-three.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHECovid\\Client\\Model;

/**
 * @author Graham Campbell <graham@alt-three.com>
 */
final class Ltla
{
    /**
     * @var array<string,string>
     */
    private const CODE_TO_METHOD = [
%s
    ];

    /**
     * @var string
     */
    private $name;

    /**
     * @var string|null
     */
    private $code;

    /**
     * @var string|null
     */
    private $utlaCode;

    /**
     * @param string      $name
     * @param string|null $code
     * @param string|null $utlaCode
     *
     * @return void
     */
    private function __construct(string $name, ?string $code, ?string $utlaCode)
    {
        $this->name = $name;
        $this->code = $code;
        $this->utlaCode = $utlaCode;
    }

    /**
     * @param string $code
     *
     * @return \\PHECovid\\Client\\Model\\Ltla
     */
    public static function fromCode(string $code): self
    {
        $method = self::CODE_TO_METHOD[$code] ?? null;

        if (null === $method) {
            throw new \\InvalidArgumentException(\'Unknown area code.\');
        }

        return self::$method();
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
            throw new \\BadMethodCallException(\'Area code not available.\');
        }

        return $this->code;
    }

    /**
     * @return \\PHECovid\\Client\\Model\\Utla
     */
    public function getUtla(): Utla
    {
        if (null === $this->utlaCode) {
            throw new \\BadMethodCallException(\'UTLA code not available.\');
        }

        return Utla::fromCode($this->utlaCode);
    }
}
';

    private const MSOA_TEMPLATE = '<?php

declare(strict_types=1);

/*
 * This file is part of the PHE Covid API Client.
 *
 * (c) Graham Campbell <graham@alt-three.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHECovid\\Client\\Model;

/**
 * @author Graham Campbell <graham@alt-three.com>
 */
final class Msoa
{
    /**
     * @var array<string,string>
     */
    private const CODE_TO_METHOD = [
%s
    ];

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $ltlaCode;

    /**
     * @param string $name
     * @param string $code
     * @param string $ltlaCode
     *
     * @return void
     */
    private function __construct(string $name, string $code, string $ltlaCode)
    {
        $this->name = $name;
        $this->code = $code;
        $this->ltlaCode = $ltlaCode;
    }

    /**
     * @param string $code
     *
     * @return \\PHECovid\\Client\\Model\\Msoa
     */
    public static function fromCode(string $code): self
    {
        $method = self::CODE_TO_METHOD[$code] ?? null;

        if (null === $method) {
            throw new \\InvalidArgumentException(\'Unknown area code.\');
        }

        return self::$method();
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
        return $this->code;
    }

    /**
     * @return \\PHECovid\\Client\\Model\\Ltla
     */
    public function getLtla(): Ltla
    {
        return Ltla::fromCode($this->ltlaCode);
    }
}
';

    private const METHOD_TEMPLATE_2 = '
    /**
     * @return \\PHECovid\\Client\\Model\\%s
     */
    public static function %s(): self
    {
        return new self(%s, %s);
    }
';

    private const METHOD_TEMPLATE_3 = '
    /**
     * @return \\PHECovid\\Client\\Model\\%s
     */
    public static function %s(): self
    {
        return new self(%s, %s, %s);
    }
';

    public static function generateClass(string $class, array $map): string
    {
        return \sprintf(
            self::FILE_TEMPLATE,
            $class,
            self::generateMap($map),
            $class,
            self::generateClassMethods($class, $map)
        );
    }

    public static function generateUtla(array $map): string
    {
        return \sprintf(
            self::UTLA_TEMPLATE,
            self::generateMap($map),
            self::generateUtlaMethods($map)
        );
    }

    public static function generateLtla(array $map): string
    {
        return \sprintf(
            self::LTLA_TEMPLATE,
            self::generateMap($map),
            self::generateLtlaMethods($map)
        );
    }

    public static function generateMsoa(array $map): string
    {
        return \sprintf(
            self::MSOA_TEMPLATE,
            self::generateMap($map),
            self::generateMsoaMethods($map)
        );
    }

    private static function generateMap(array $map): string
    {
        $output = '';

        foreach ($map as $code => $data) {
            if ('null' !== $code) {
                $output .= \sprintf("        '%s' => '%s',\n", $code, self::methodName($data['name'], $data['parent']['name'] ?? null));
            }
        }

        return \rtrim($output);
    }

    private static function generateClassMethods(string $class, array $map): string
    {
        $output = '';

        foreach ($map as $code => $data) {
            $output .= self::generateClassMethod($class, $code, $data['name']);
        }

        return $output;
    }

    private static function generateUtlaMethods(array $map): string
    {
        $output = '';

        foreach ($map as $code => $data) {
            $output .= self::generateUtlaMethod($code, $data['name'], $data['parent'] ?? null);
        }

        return $output;
    }

    private static function generateLtlaMethods(array $map): string
    {
        $output = '';

        foreach ($map as $code => $data) {
            $output .= self::generateLtlaMethod($code, $data['name'], $data['parent'] ?? null);
        }

        return $output;
    }

    private static function generateMsoaMethods(array $map): string
    {
        $output = '';

        foreach ($map as $code => $data) {
            $output .= self::generateMsoaMethod($code, $data['name'], $data['parent']);
        }

        return $output;
    }

    private static function generateClassMethod(string $class, string $code, string $name): string
    {
        return \sprintf(
            self::METHOD_TEMPLATE_2,
            $class,
            self::methodName($name),
            \sprintf('\'%s\'', \str_replace('\'', '\\\'', $name)),
            'null' === $code ? 'null' : \sprintf('\'%s\'', $code)
        );
    }

    private static function generateUtlaMethod(string $code, string $name, array $parent = null): string
    {
        return \sprintf(
            self::METHOD_TEMPLATE_3,
            'Utla',
            self::methodName($name),
            \sprintf('\'%s\'', \str_replace('\'', '\\\'', $name)),
            'null' === $code ? 'null' : \sprintf('\'%s\'', $code),
            'null' === $code || !isset($parent['code']) ? 'null' : \sprintf('\'%s\'', $parent['code'])
        );
    }

    private static function generateLtlaMethod(string $code, string $name, array $parent = null): string
    {
        return \sprintf(
            self::METHOD_TEMPLATE_3,
            'Ltla',
            self::methodName($name),
            \sprintf('\'%s\'', \str_replace('\'', '\\\'', $name)),
            'null' === $code ? 'null' : \sprintf('\'%s\'', $code),
            'null' === $code ? 'null' : \sprintf('\'%s\'', $parent['code'] ?? $code)
        );
    }

    private static function generateMsoaMethod(string $code, string $name, array $parent): string
    {
        return \sprintf(
            self::METHOD_TEMPLATE_3,
            'Msoa',
            self::methodName($name, $parent['name']),
            \sprintf('\'%s\'', \str_replace('\'', '\\\'', $name)),
            \sprintf('\'%s\'', $code),
            \sprintf('\'%s\'', $parent['code'])
        );
    }

    private static function methodName(string $name, string $laName = null): string
    {
        return \lcfirst(\str_replace([' ', ',', '.'], ['', '', ''], \ucwords(\str_replace(['\'', '!', '-', '(', ')', '&'], ['', '', ' ', ' ', ' ', 'and'], null === $laName ? $name : \sprintf('%s %s', $laName, $name)))));
    }
}
