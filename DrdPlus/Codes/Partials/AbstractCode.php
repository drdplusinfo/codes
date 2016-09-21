<?php
namespace DrdPlus\Codes\Partials;

use DrdPlus\Codes\Code;
use Granam\Scalar\Tools\ToString;
use Granam\Strict\Object\StrictObject;
use Granam\Tools\ValueDescriber;

/** @noinspection SingletonFactoryPatternViolationInspection */
abstract class AbstractCode extends StrictObject implements Code
{
    private static $codes = [];

    /**
     * @param string $codeValue
     * @return AbstractCode|static
     * @throws \Granam\Scalar\Tools\Exceptions\WrongParameterType
     * @throws Exceptions\UnknownValueForCode
     */
    public static function getIt($codeValue)
    {
        $codeValue = trim(ToString::toString($codeValue));
        if (!array_key_exists(static::class, self::$codes)) {
            self::$codes[static::class] = [];
        }
        if (!array_key_exists($codeValue, self::$codes[static::class])) {
            self::$codes[static::class][$codeValue] = new static($codeValue);
        }

        return self::$codes[static::class][$codeValue];
    }

    /**
     * @var string
     */
    private $value;

    /**
     * @param string $codeValue
     * @throws \Granam\Scalar\Tools\Exceptions\WrongParameterType
     * @throws Exceptions\UnknownValueForCode
     */
    protected function __construct($codeValue)
    {
        $this->guardCodeExistence($codeValue);
        $this->value = $codeValue;
    }

    private function guardCodeExistence($codeValue)
    {
        if (!in_array($codeValue, (new \ReflectionClass($this))->getConstants(), true)) {
            throw new Exceptions\UnknownValueForCode('Given code value is not known: '
                . ValueDescriber::describe($codeValue));
        }
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->value;
    }
}