<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\Code;

abstract class AbstractCodeTest extends \PHPUnit_Framework_TestCase
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
     * @expectedExceptionMessageRegExp ~da Vinci~
     */
    public function I_can_not_create_code_from_unknown_value()
    {
        $sutClass = $this->getSutClass();
        $sutClass::getIt('da Vinci');
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

    /**
     * @test
     */
    public function All_constants_can_be_given_by_getter()
    {
        $sutClass = $this->getSutClass();
        $constantValues = (new \ReflectionClass($sutClass))->getConstants();
        sort($constantValues); // re-index by numbers
        $allValuesGetter = $this->getAllValuesGetter();
        $givenValues = $sutClass::$allValuesGetter();
        $expectedIndex = 0;
        foreach (array_keys($givenValues) as $index) {
            self::assertSame($expectedIndex, $index, 'Indexes of all values should be continual.');
            $expectedIndex++;
        }
        sort($givenValues);
        self::assertSame(
            $constantValues,
            $givenValues,
            "Used getter {$allValuesGetter}. There are " . (
            count($missingOrDifferent = array_diff_assoc($constantValues, $givenValues)) > 0
                ? 'missing values or different keys in given: ' . var_export($missingOrDifferent, true)
                : 'superfluous values or different keys in given: ' . var_export(array_diff_assoc($givenValues, $constantValues), true)
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
        $givenValues = $sutClass::$allValuesGetter();
        foreach ($givenValues as $givenValue) {
            $code = $sutClass::getIt($givenValue);
            self::assertSame($givenValue, (string)$code);
        }
    }
}