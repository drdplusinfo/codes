<?php
namespace DrdPlus\Codes\Tests\Armaments\EnumTypes;

use DrdPlus\Codes\Armaments\MeleeWeaponCode;
use DrdPlus\Tests\Codes\EnumTypes\AbstractCodeTypeTest;
use PHPUnit\Util\Type;

class WeaponlikeCodeTypeTest extends AbstractCodeTypeTest
{
    /**
     * @return Type|string
     */
    protected function getRegisteredClass(): string
    {
        return MeleeWeaponCode::class; // for example
    }

    /**
     * @test
     * @expectedException \DrdPlus\Codes\Armaments\EnumTypes\Exceptions\ThereIsNoDefaultEnumForWeaponlikeCode
     * @expectedExceptionMessageRegExp ~MeleeWeaponCode~
     */
    public function I_get_enum_with_empty_string_on_conversion()
    {
        parent::I_get_enum_with_empty_string_on_conversion();
    }

    /**
     * @test
     * @expectedException \DrdPlus\Codes\Armaments\EnumTypes\Exceptions\ThereIsNoDefaultEnumForWeaponlikeCode
     * @expectedExceptionMessageRegExp ~MeleeWeaponCode~
     */
    public function I_get_default_enum_class_if_subtype_regexp_does_not_match()
    {
        parent::I_get_default_enum_class_if_subtype_regexp_does_not_match();
    }

}