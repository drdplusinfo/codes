<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\Code;
use DrdPlus\Codes\Partials\AbstractCode;

abstract class CodeTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function It_is_code()
    {
        self::assertTrue(
            is_a($this->getSutClass(), Code::class, true),
            $this->getSutClass() . ' is not an instance of ' . Code::class
        );
    }

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
     * @return AbstractCode|string
     */
    protected function getSutClass()
    {
        return preg_replace('~[\\\]Tests([\\\].+)Test$~', '$1', static::class);
    }

    /**
     * @return AbstractCode
     */
    protected function getSut()
    {
        $sutClass = $this->getSutClass();

        return $sutClass::getIt(current((new \ReflectionClass($sutClass))->getConstants()));
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
     * @expectedException \DrdPlus\Codes\Partials\Exceptions\UnknownValueForCode
     * @expectedExceptionMessageRegExp ~da Vinci~
     */
    public function I_can_not_create_code_from_unknown_value()
    {
        $sutClass = $this->getSutClass();
        $sutClass::getIt('da Vinci');
    }

    /**
     * @test
     * @expectedException \Doctrineum\String\Exceptions\UnexpectedValueToEnum
     * @expectedExceptionMessageRegExp ~\DateTime~
     */
    public function I_can_not_create_code_from_invalid_value_format()
    {
        $sutClass = $this->getSutClass();
        $sutClass::getIt(new \DateTime());
    }

    /**
     * @test
     */
    public function All_constants_can_be_given_by_getter()
    {
        $sutClass = $this->getSutClass();
        $constantValues = (new \ReflectionClass($sutClass))->getConstants();
        sort($constantValues); // re-index by numbers
        $allValuesGetter = $this->getAllValuesGetter();
        /** @var string[] $givenValues */
        $givenValues = $sutClass::$allValuesGetter();
        $expectedIndex = 0;
        foreach ($givenValues as $index => $value) {
            self::assertSame($expectedIndex, $index, 'Indexes of all values should be continual.');
            $expectedIndex++;
        }
        sort($givenValues);
        self::assertSame(
            $constantValues,
            $givenValues,
            'There are ' . (
            count($missingOrDifferent = array_diff($constantValues, $givenValues)) > 0
                ? "missing values from '{$allValuesGetter}' " . var_export($missingOrDifferent, true)
                : "superfluous values from '{$allValuesGetter}' " . var_export(array_diff($givenValues, $constantValues), true)
            )
        );
    }

    /**
     * @return string
     */
    protected function getAllValuesGetter()
    {
        $sutClass = $this->getSutClass();
        $basename = preg_replace('~.*[\\\]~', '', $sutClass);

        return "get{$basename}s";
    }

    /**
     * @test
     */
    public function I_can_use_code_object_as_its_string_value()
    {
        $sutClass = $this->getSutClass();
        $allValuesGetter = $this->getAllValuesGetter();
        /** @var string[] $givenValues */
        $givenValues = $sutClass::$allValuesGetter();
        foreach ($givenValues as $givenValue) {
            $code = $sutClass::getIt($givenValue);
            self::assertSame($givenValue, (string)$code);
        }
    }

    /**
     * @test
     */
    public function I_get_whispered_current_code_as_return_value_of_factory_method()
    {
        $reflectionClass = new \ReflectionClass($this->getSutClass());
        $classBaseName = preg_replace('~^.*[\\\](\w+)$~', '$1', $this->getSutClass());
        self::assertSame(<<<PHPDOC
/**
 * @method static {$classBaseName} getIt(\$codeValue)
 */
PHPDOC
            , $reflectionClass->getDocComment()
        );
    }
}