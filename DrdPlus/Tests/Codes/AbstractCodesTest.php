<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\Code;

abstract class AbstractCodesTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    abstract public function I_can_get_all_codes_at_once();

    /**
     * @param array|string[] $expectedCodes
     */
    protected function I_can_get_codes_by_same_named_constants(array $expectedCodes)
    {
        $reflection = new \ReflectionClass($this->getSutClass());
        $constants = $reflection->getConstants();
        foreach ($expectedCodes as $expectedCode) {
            $constantName = strtoupper($expectedCode);
            self::assertArrayHasKey($constantName, $constants);
            self::assertSame($constants[$constantName], $expectedCode);
        }
    }

    /**
     * @return string|Code
     */
    protected function getSutClass()
    {
        return preg_replace('~[\\\]Tests([\\\].+)Test$~', '$1', static::class);
    }

    /**
     * @test
     */
    public function I_can_create_code_instance_from_every_constant()
    {
        $sutClass = $this->getSutClass();
        foreach ((new \ReflectionClass($sutClass))->getConstants() as $constant) {
            $code = $sutClass::getIt($constant);
            self::assertInstanceOf($sutClass, $code);
            self::assertSame($constant, $code->getValue());
            $sameCode = $sutClass::getIt($constant);
            self::assertSame($code, $sameCode);
        }
    }

    /**
     * @test
     * @expectedException \DrdPlus\Codes\Exceptions\UnknownValueForCode
     * @expectedExceptionMessageRegExp ~DaVinci~
     */
    public function I_can_not_create_code_from_unknown_value()
    {
        $sutClass = $this->getSutClass();
        $sutClass::getIt('DaVinci');
    }

    /**
     * @test
     * @expectedException \Granam\Scalar\Tools\Exceptions\WrongParameterType
     * @expectedExceptionMessageRegExp ~\DateTime~
     */
    public function I_can_not_create_code_from_invalid_value_format()
    {
        $sutClass = $this->getSutClass();
        $sutClass::getIt(new \DateTime());
    }
}