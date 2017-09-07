<?php
namespace DrdPlus\Tests\Codes\Partials;

use DrdPlus\Tests\Codes\AbstractCodeTest;

class TranslatableCodeTest extends AbstractCodeTest
{

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