<?php
namespace DrdPlus\Codes\Partials;

use Doctrineum\Scalar\ScalarEnumInterface;
use Doctrineum\String\StringEnum;
use DrdPlus\Codes\Code;
use Granam\Tools\ValueDescriber;

/** @noinspection SingletonFactoryPatternViolationInspection */
abstract class AbstractCode extends StringEnum implements Code
{
    /**
     * @param string $codeValue
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
            throw new Exceptions\UnknownValueForCode('Given code value is not known: '
                . ValueDescriber::describe($codeValue));
        }
    }
}