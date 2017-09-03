<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\Code;
use DrdPlus\Codes\Partials\AbstractCode;
use Granam\Tests\Tools\TestWithMockery;

/**
 * @method static AbstractCode|string getSutClass($sutTestClass = null, $regexp = '~\\\Tests(.+)Test$~')
 */
abstract class AbstractCodeTest extends TestWithMockery
{

    protected function setUp()
    {
        self::assertContains(__NAMESPACE__, static::class, 'Code test has to be in "Tests" namespace');
    }

    /**
     * @test
     */
    public function It_is_code()
    {
        self::assertTrue(
            class_exists(self::getSutClass()),
            self::getSutClass() . ' has not been found, check namespace of its test ' . static::class
        );
        self::assertTrue(
            is_a(self::getSutClass(), Code::class, true),
            self::getSutClass() . ' is not an instance of ' . Code::class
        );
    }

    /**
     * @return AbstractCode
     */
    protected function getSut(): AbstractCode
    {
        $sutClass = self::getSutClass();
        $constants = (new \ReflectionClass($sutClass))->getConstants();

        return $sutClass::getIt(reset($constants));
    }

    /**
     * @test
     */
    public function I_can_create_code_instance_from_every_constant()
    {
        $sutClass = self::getSutClass();
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
        $sutClass = self::getSutClass();
        $sutClass::getIt('da Vinci');
    }

    /**
     * @test
     * @expectedException \Doctrineum\Scalar\Exceptions\UnexpectedValueToEnum
     * @expectedExceptionMessageRegExp ~\DateTime~
     */
    public function I_can_not_create_code_from_invalid_value_format()
    {
        $sutClass = self::getSutClass();
        $sutClass::getIt(new \DateTime());
    }

    /**
     * @test
     */
    public function All_public_constants_can_be_given_by_getter()
    {
        $sutClass = self::getSutClass();
        $constants = (new \ReflectionClass($sutClass))->getConstants();
        self::assertCount(count($constants), array_unique($constants));
        $givenValues = $sutClass::getPossibleValues();
        $expectedIndex = 0;
        foreach ($givenValues as $index => $value) {
            self::assertSame($expectedIndex, $index, 'Indexes of all values should be continual.');
            $expectedIndex++;
            $constantName = strtoupper($value);
            self::assertArrayHasKey($constantName, $constants);
            self::assertSame($constants[$constantName], $value);
        }
        $constantValues = array_values($constants);
        sort($constantValues);
        sort($givenValues);
        self::assertSame(
            $constantValues,
            $givenValues,
            'There are ' . (
            count($missingOrDifferent = array_diff($constantValues, $givenValues)) > 0
                ? "missing values from 'getPossibleValues' " . var_export($missingOrDifferent, true)
                : "superfluous values from 'getPossibleValues' " . var_export(array_diff($givenValues, $constantValues), true)
            )
        );
    }

    /**
     * @test
     */
    public function I_can_use_code_object_as_its_string_value()
    {
        $sutClass = self::getSutClass();
        /** @var string[] $givenValues */
        $givenValues = $sutClass::getPossibleValues();
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
        $reflectionClass = new \ReflectionClass(self::getSutClass());
        $classBaseName = preg_replace('~^.*[\\\](\w+)$~', '$1', self::getSutClass());
        self::assertSame(<<<PHPDOC
/**
 * @method static {$classBaseName} getIt(\$codeValue)
 */
PHPDOC
            , $reflectionClass->getDocComment()
        );
    }

    /**
     * @test
     */
    public function I_can_call_its_possible_values_even_if_they_are_empty()
    {
        $sutClass = self::getSutClass();
        self::assertEmpty(
            array_diff(
                array_values((new \ReflectionClass($sutClass))->getConstants()),
                $sutClass::getPossibleValues()
            )
        );
    }
}