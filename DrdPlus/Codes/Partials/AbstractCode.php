<?php
namespace DrdPlus\Codes\Partials;

use Doctrineum\Scalar\ScalarEnum;
use Doctrineum\Scalar\ScalarEnumInterface;
use DrdPlus\Codes\Code;
use Granam\String\StringInterface;
use Granam\Tools\ValueDescriber;

/** @noinspection SingletonFactoryPatternViolationInspection */
abstract class AbstractCode extends ScalarEnum implements Code
{

    /**
     * @return array|string[]
     * @throws \LogicException
     */
    public static function getPossibleValues()
    {
        throw new \LogicException('Not implemented');
    }

    /**
     * @param string|StringInterface $codeValue
     * @return AbstractCode|ScalarEnumInterface
     * @throws \DrdPlus\Codes\Partials\Exceptions\UnknownValueForCode
     * @throws \Doctrineum\Scalar\Exceptions\CanNotCreateInstanceOfAbstractEnum
     * @throws \Doctrineum\Scalar\Exceptions\UnexpectedValueToEnum
     * @throws \Granam\Scalar\Tools\Exceptions\WrongParameterType
     */
    public static function getIt($codeValue)
    {
        return self::getEnum($codeValue);
    }

    /**
     * @param string $codeValue
     * @throws \Doctrineum\Scalar\Exceptions\UnexpectedValueToEnum
     * @throws \DrdPlus\Codes\Partials\Exceptions\UnknownValueForCode
     */
    protected function __construct($codeValue)
    {
        parent::__construct($codeValue);
        $this->guardCodeExistence($this->enumValue);
    }

    /**
     * @param string $codeValue
     * @throws \DrdPlus\Codes\Partials\Exceptions\UnknownValueForCode
     */
    private function guardCodeExistence($codeValue)
    {
        if (!in_array($codeValue, (new \ReflectionClass($this))->getConstants(), true)) {
            throw new Exceptions\UnknownValueForCode('Given code value '
                . ValueDescriber::describe($codeValue)
                . ' is not known to ' . static::class
            );
        }
    }
}