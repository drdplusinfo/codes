<?php
namespace DrdPlus\Tests\Codes\Partials;

use DrdPlus\Codes\Partials\TranslatableCode;
use DrdPlus\Tests\Codes\AbstractCodeTest;

class TranslatableCodeTest extends AbstractCodeTest
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
        /** @var TranslatableCode $sutClass */
        $sutClass = self::getSutClass();
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
        $values = $sutClass::getPossibleValues();
        sort($values);
        self::assertSame(
            [],
            array_diff(array_values($constants), $values),
            'Some constants are missing in values: ' . implode(',', array_diff(array_values($constants), $values))
        );
        $difference = array_diff($values, array_values($constants));
        $reflectionClass = new \ReflectionClass(TranslatableCode::class);
        $customValuesReflection = $reflectionClass->getProperty('customValues');
        $customValuesReflection->setAccessible(true);
        $customValues = $customValuesReflection->getValue()[$sutClass] ?? [];
        sort($difference);
        sort($customValues);
        self::assertEquals($difference, $customValues);
        foreach ($values as $value) {
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
     * @expectedException \DrdPlus\Codes\Partials\Exceptions\UnknownValueForCode
     * @expectedExceptionMessageRegExp ~da Vinci~
     */
    public function I_can_not_create_code_from_unknown_value()
    {
        if ((new \ReflectionClass(self::getSutClass()))->isAbstract()) {
            throw new \DrdPlus\Codes\Partials\Exceptions\UnknownValueForCode(
                'Even da Vinci can not create instance from abstract class'
            );
        }
        parent::I_can_not_create_code_from_unknown_value();
    }

    /**
     * @test
     */
    public function I_can_use_code_object_as_its_string_value()
    {
        if ((new \ReflectionClass(self::getSutClass()))->isAbstract()) {
            self::assertFalse(false, 'Can not create enum from abstract class');

            return;
        }
        parent::I_can_use_code_object_as_its_string_value();
    }

    /**
     * @test
     * @expectedException \DrdPlus\Codes\Partials\Exceptions\InvalidLanguageCode
     * @expectedExceptionMessageRegExp ~a1~
     */
    public function I_can_not_use_invalid_language_code_format_for_custom_code()
    {
        /** @var TranslatableCode $sutClass */
        $sutClass = self::getSutClass();
        try {
            self::assertTrue(
                $sutClass::extendByCustomValue('baz', ['cs' => ['one' => 'štěstí']]),
                'Code should not be already registered for this test'
            );
        } catch (\Exception $exception) {
            self::fail('No exception expected so far: ' . $exception->getMessage());
        }
        self::assertTrue(
            $sutClass::extendByCustomValue('qux', ['a1' => 'anything here']),
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
        /** @var TranslatableCode $sutClass */
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
        /** @var TranslatableCode $sutClass */
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
        /** @var TranslatableCode $sutClass */
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
        /** @var TranslatableCode $sutClass */
        $sutClass = self::getSutClass();
        self::assertTrue(
            $sutClass::extendByCustomValue('barfoo', ['cs' => ['one' => '']]),
            'Code should not be already registered for this test'
        );
    }
}