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
     * @param string $name
     *
     * @return void
     */
    private function __construct(string $name)
    {
        $this->name = $name;
    }
%s
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
';

    private const METHOD_TEMPLATE = '
    /**
     * @return \PHECovid\Model\%s
     */
    public static function %s(): self
    {
        return new self(\'%s\');
    }
';

    public static function generate(string $type, array $list): string
    {
        return \sprintf(self::FILE_TEMPLATE, \ucfirst($type), self::generateMethods(\ucfirst($type), $list));
    }

    private static function generateMethods(string $class, array $list): string
    {
        $output = '';

        foreach ($list as $name) {
            $output .= self::generateMethod($class, $name);
        }

        return $output;
    }

    private static function generateMethod(string $class, string $name): string
    {
        $method = \lcfirst(\str_replace([' ', ',', '.'], ['', '', ''], \ucwords(\str_replace(['\'', '-'], ['', ' '], $name))));

        return \sprintf(self::METHOD_TEMPLATE, $class, $method, \str_replace('\'', '\\\'', $name));
    }
}
