<?php
namespace DrdPlus\Tests\Codes\Partials;

use DrdPlus\Codes\Partials\TranslatableCode;
use DrdPlus\Tests\Codes\AbstractCodeTest;

class TranslatableCodeTest extends AbstractCodeTest
{
    /**
     * @test
     */
    public function I_can_extended_it_by_custom_translatable_code()
    {
        /** @var TranslatableCode $sutClass */
        $sutClass = self::getSutClass();
        self::assertNotContains('foo', $sutClass::getPossibleValues());
        $sutClass::extendByCustomValue('foo', []);
        self::assertContains('foo', $sutClass::getPossibleValues());
        $sutClass::extendByCustomValue('bar', ['cs' => ['one' => 'taková laťka']]);
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
}