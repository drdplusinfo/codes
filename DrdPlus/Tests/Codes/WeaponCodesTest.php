<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\WeaponCodes;

class WeaponCodesTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function I_can_get_axe_codes_at_once()
    {
        self::assertSame(
            [
                'light_axe',
                'axe',
                'war_axe',
                'two_handed_axe',
            ],
            WeaponCodes::getAxeCodes()
        );

        $weaponCodesReflection = new \ReflectionClass('\DrdPlus\Codes\WeaponCodes');
        self::assertSame(
            array_values( // re-setting indexes
                array_filter(
                    array_values($weaponCodesReflection->getConstants()),
                    function ($code) {
                        return strpos($code, 'axe') !== false;
                    }
                )
            ),
            WeaponCodes::getAxeCodes()
        );
    }

    /**
     * @test
     */
    public function I_can_get_knife_and_dagger_codes_at_once()
    {
        self::assertSame(
            [
                'knife',
                'dagger',
                'stabbing_dagger',
                'long_knife',
                'long_dagger',
            ],
            WeaponCodes::getKnifeAndDaggerCodes()
        );

        $weaponCodesReflection = new \ReflectionClass('\DrdPlus\Codes\WeaponCodes');
        self::assertSame(
            array_values( // re-setting indexes
                array_filter(
                    array_values($weaponCodesReflection->getConstants()),
                    function ($code) {
                        return
                            strpos($code, 'knife') !== false
                            || strpos($code, 'dagger') !== false;
                    }
                )
            ),
            WeaponCodes::getKnifeAndDaggerCodes()
        );
    }
}