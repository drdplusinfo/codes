<?php
namespace DrdPlus\Codes;

use Granam\Scalar\Tools\ToString;
use Granam\Strict\Object\StrictObject;
use Granam\String\StringInterface;
use Granam\Tools\ValueDescriber;

/** @noinspection SingletonFactoryPatternViolationInspection */
abstract class Code extends StrictObject implements StringInterface
{
    private static $codes = [];

    /**
     * @param string $codeValue
     * @return Code
     * @throws \Granam\Scalar\Tools\Exceptions\WrongParameterType
     * @throws \DrdPlus\Codes\Exceptions\UnknownValueForCode
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
     * @throws \DrdPlus\Codes\Exceptions\UnknownValueForCode
     */
    protected function __construct($codeValue)
    {
        $this->guardCodeExistence($codeValue);
        $this->value = $codeValue;
    }

    private function guardCodeExistence($codeValue)
    {
        if (!in_array($codeValue, (new \ReflectionClass($this))->getConstants(), true)) {
            throw new Exceptions\UnknownValueForCode('Given code value is not known: ' . ValueDescriber::describe($codeValue));
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