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
    public function It_is_code(): void
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

        return $sutClass::getIt($this->getSutDefaultValue());
    }

    /**
     * @return string
     */
    protected function getSutDefaultValue(): string
    {
        $sutClass = self::getSutClass();
        $values = $sutClass::getPossibleValues();

        return \reset($values);
    }

    /**
     * @test
     */
    public function I_can_create_code_instance_from_every_constant(): void
    {
        $sutClass = self::getSutClass();
        /** @noinspection PhpUnhandledExceptionInspection */
        foreach ((new \ReflectionClass($sutClass))->getConstants() as $constant) {
            self::assertTrue($sutClass::hasIt($constant));
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
    public function I_can_not_create_code_from_unknown_value(): void
    {
        $sutClass = self::getSutClass();
        $sutClass::getIt('da Vinci');
    }

    /**
     * @test
     * @expectedException \Doctrineum\Scalar\Exceptions\UnexpectedValueToEnum
     * @expectedExceptionMessageRegExp ~\DateTime~
     */
    public function I_can_not_create_code_from_invalid_value_format(): void
    {
        $sutClass = self::getSutClass();
        $sutClass::getIt(new \DateTime());
    }

    /**
     * @test
     */
    public function All_public_constants_can_be_given_by_getter(): void
    {
        $sutClass = self::getSutClass();
        /** @noinspection PhpUnhandledExceptionInspection */
        $constants = (new \ReflectionClass($sutClass))->getConstants();
        self::assertCount(\count($constants), \array_unique($constants));
        /** @noinspection PhpUnhandledExceptionInspection */
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
            \count($missingOrDifferent = \array_diff($constantValues, $givenValues)) > 0
                ? "missing values from 'getPossibleValues' " . \var_export($missingOrDifferent, true)
                : "superfluous values from 'getPossibleValues' " . \var_export(\array_diff($givenValues, $constantValues), true)
            )
        );
    }

    /**
     * @test
     */
    public function I_can_use_code_object_as_its_string_value(): void
    {
        $sutClass = self::getSutClass();
        /** @var string[] $givenValues */
        /** @noinspection PhpUnhandledExceptionInspection */
        $givenValues = $sutClass::getPossibleValues();
        foreach ($givenValues as $givenValue) {
            self::assertTrue($sutClass::hasIt($givenValue), "'$givenValue' should be detected as code of '$sutClass'");
            $code = $sutClass::getIt($givenValue);
            self::assertTrue($sutClass::hasIt($code));
            self::assertSame($givenValue, (string)$code);
        }
    }

    /**
     * @test
     */
    public function I_can_call_its_possible_values_even_if_they_are_empty(): void
    {
        $sutClass = self::getSutClass();
        /** @noinspection PhpUnhandledExceptionInspection */
        self::assertEmpty(
            \array_diff(
                \array_values((new \ReflectionClass($sutClass))->getConstants()),
                $sutClass::getPossibleValues()
            )
        );
    }

    /**
     * @test
     */
    public function I_will_get_constant_values_from_reflection_as_fallback(): void
    {
        /** @noinspection PhpUnhandledExceptionInspection */
        self::assertSame([], AbstractCode::getPossibleValues());
    }

    /**
     * @test
     */
    public function I_can_get_it_with_default_value(): void
    {
        $sut = $this->findSut();
        self::assertSame($this->getSutDefaultValue(), $sut->getValue(), 'Expected different default value');
    }

    /**
     * @test
     */
    public function I_can_get_it_with_default_value_when_requested_unknown_value(): void
    {
        $sut = $this->findSut('Particle from outer word');
        $sutClass = static::getSutClass();
        self::assertSame(
            $this->getSutDefaultValue(),
            $sut->getValue(),
            "Expected different default value for {$sutClass}"
        );
        foreach ($sutClass::getPossibleValues() as $possibleValue) {
            $sut = $this->findSut($possibleValue);
            self::assertSame($possibleValue, $sut->getValue(), 'Expected different value');
        }
        $sut = $this->findSut('');
        self::assertSame($this->getSutDefaultValue(), $sut->getValue(), 'Expected different default value');
    }

    /**
     * @param string|null $withValue
     * @return AbstractCode
     */
    protected function findSut(string $withValue = null): AbstractCode
    {
        if ($withValue === null) {
            $withValue = $this->getSutDefaultValue();
        }
        $sutClass = self::getSutClass();

        return $sutClass::findIt($withValue);
    }
}