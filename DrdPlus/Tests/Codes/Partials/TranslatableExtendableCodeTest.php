<?php
namespace DrdPlus\Tests\Codes\Partials;

use DrdPlus\Codes\Partials\TranslatableExtendableCode;

class TranslatableExtendableCodeTest extends TranslatableCodeTest
{
    public function Method_to_get_default_values_is_not_public()
    {
        $sutClass = self::getSutClass();
        $reflectionClass = new \ReflectionClass($sutClass);
        $getDefaultValues = $reflectionClass->getMethod('getDefaultValues');
        self::assertFalse($getDefaultValues->isPublic(), "Method $sutClass::getDefaultValues is not intended to be public");
    }

    /**
     * @test
     */
    public function I_can_extended_it_by_custom_translatable_code()
    {
        /** @var TranslatableExtendableCode $sutClass */
        $sutClass = self::getSutClass();
        $reflectionClass = new \ReflectionClass($sutClass);
        $translations = $reflectionClass->getProperty('translations');
        $translations->setAccessible(true);
        // to reset already initialized translations and force them to be loaded again
        $translations->setValue(null);
        $translations->setAccessible(false);
        self::assertNotContains('foo', $sutClass::getPossibleValues());
        self::assertTrue($sutClass::extendByCustomValue('foo', []));
        self::assertFalse(
            $sutClass::extendByCustomValue('foo', ['en' => ['one' => 'foo']]),
            'Same custom code to register should be skipped. Have you overloaded getDefaultValues method?'
        );
        self::assertContains('foo', $sutClass::getPossibleValues());
        self::assertTrue($sutClass::extendByCustomValue('bar', ['cs' => ['one' => 'taková laťka']]));
        self::assertContains('bar', $sutClass::getPossibleValues());
        if ((new \ReflectionClass($sutClass))->isAbstract()) {
            return;
        }
        $bar = $sutClass::getIt('bar');
        self::assertSame('taková laťka', $bar->translateTo('cs'));
        self::assertTrue($sutClass::extendByCustomValue('baz', ['cs' => ['one' => 'eee, ehm?']]));
        $bar = $sutClass::getIt('baz');
        self::assertSame('eee, ehm?', $bar->translateTo('cs'));
    }

    /**
     * @test
     */
    public function All_public_constants_can_be_given_by_getter()
    {
        $reflection = new \ReflectionClass(self::getSutClass());
        $constants = $reflection->getConstants();
        asort($constants);
        $sutClass = self::getSutClass();
        $possibleValues = $sutClass::getPossibleValues();
        sort($possibleValues);
        self::assertSame(
            [],
            array_diff(array_values($constants), $possibleValues),
            'Some constants are missing in possible values: ' . implode(',', array_diff(array_values($constants), $possibleValues))
        );
        $possibleValuesAndConstantsDifference = array_diff($possibleValues, array_values($constants));
        $reflectionClass = new \ReflectionClass(TranslatableExtendableCode::class);
        $customValuesReflection = $reflectionClass->getProperty('customValues');
        $customValuesReflection->setAccessible(true);
        $customValues = $customValuesReflection->getValue()[$sutClass] ?? [];
        sort($possibleValuesAndConstantsDifference);
        sort($customValues);
        self::assertEquals(
            $possibleValuesAndConstantsDifference,
            $customValues,
            'That is strange, have you overloaded getDefaultValues method?'
        );
        foreach ($possibleValues as $value) {
            if (in_array($value, $customValues, true)) { // custom values are not as constants
                continue;
            }
            $constantName = strtoupper($value);
            self::assertArrayHasKey($constantName, $constants);
            self::assertSame($constants[$constantName], $value);
        }
    }

    /**
     * @test
     * @expectedException \DrdPlus\Codes\Partials\Exceptions\InvalidLanguageCode
     * @expectedExceptionMessageRegExp ~a1~
     */
    public function I_can_not_use_invalid_language_code_format_for_custom_code()
    {
        /** @var TranslatableExtendableCode $sutClass */
        $sutClass = self::getSutClass();
        try {
            $extended = $sutClass::extendByCustomValue('qux', ['cs' => ['one' => 'štěstí']]);
        } catch (\Exception $exception) {
            self::fail('No exception expected so far: ' . $exception->getMessage());

            return;
        }
        self::assertTrue($extended, 'Code should not be already registered for this test');
        self::assertTrue(
            $sutClass::extendByCustomValue('quux', ['a1' => 'anything here']),
            'Code should not be already registered for this test'
        );
    }

    /**
     * @test
     * @expectedException \DrdPlus\Codes\Partials\Exceptions\InvalidTranslationFormat
     * @expectedExceptionMessageRegExp ~this should be array~
     */
    public function I_can_not_use_invalid_data_format_of_translations_for_custom_code()
    {
        /** @var TranslatableExtendableCode $sutClass */
        $sutClass = self::getSutClass();
        self::assertTrue(
            $sutClass::extendByCustomValue('foobar', ['uk' => 'this should be array']),
            'Code should not be already registered for this test'
        );
    }

    /**
     * @test
     * @expectedException \DrdPlus\Codes\Partials\Exceptions\UnknownTranslationPlural
     * @expectedExceptionMessageRegExp ~all~
     */
    public function I_can_not_use_invalid_plural_for_translation_of_custom_code()
    {
        /** @var TranslatableExtendableCode $sutClass */
        $sutClass = self::getSutClass();
        self::assertTrue(
            $sutClass::extendByCustomValue('foobaz', ['cs' => ['all' => 'have I missed something?']]),
            'Code should not be already registered for this test'
        );
    }

    /**
     * @test
     * @expectedException \DrdPlus\Codes\Partials\Exceptions\InvalidTranslationFormat
     * @expectedExceptionMessageRegExp ~NULL~
     */
    public function I_can_not_use_non_string_for_translation_of_custom_code()
    {
        /** @var TranslatableExtendableCode $sutClass */
        $sutClass = self::getSutClass();
        self::assertTrue(
            $sutClass::extendByCustomValue('fooqux', ['cs' => ['one' => null]]),
            'Code should not be already registered for this test'
        );
    }

    /**
     * @test
     * @expectedException \DrdPlus\Codes\Partials\Exceptions\InvalidTranslationFormat
     * @expectedExceptionMessageRegExp ~''~
     */
    public function I_can_not_use_empty_string_for_translation_of_custom_code()
    {
        /** @var TranslatableExtendableCode $sutClass */
        $sutClass = self::getSutClass();
        self::assertTrue(
            $sutClass::extendByCustomValue('barfoo', ['cs' => ['one' => '']]),
            'Code should not be already registered for this test'
        );
    }
}