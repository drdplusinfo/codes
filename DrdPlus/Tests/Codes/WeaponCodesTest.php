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

    /**
     * @test
     */
    public function I_can_get_mace_and_club_codes_at_once()
    {
        self::assertSame(
            [
                'cudgel',
                'club',
                'hobnailed_club',
                'light_mace',
                'mace',
                'heavy_club',
                'war_hammer',
                'two_handed_club',
                'heavy_sledgehammer',
            ],
            WeaponCodes::getMaceAndClubCodes()
        );

        $weaponCodesReflection = new \ReflectionClass('\DrdPlus\Codes\WeaponCodes');
        self::assertSame(
            array_values( // re-setting indexes
                array_filter(
                    array_values($weaponCodesReflection->getConstants()),
                    function ($code) {
                        return
                            strpos($code, 'cudgel') !== false
                            || strpos($code, 'club') !== false
                            || strpos($code, 'mace') !== false
                            || strpos($code, 'hammer') !== false;
                    }
                )
            ),
            WeaponCodes::getMaceAndClubCodes()
        );
    }

    /**
     * @test
     */
    public function I_can_get_morningstar_and_morgenstern_codes_at_once()
    {
        self::assertSame(
            [
                'light_morgenstern',
                'morgenstern',
                'heavy_morgenstern',
                'flail',
                'morningstar',
                'hobnailed_flail',
                'heavy_morningstar',
            ],
            WeaponCodes::getMorningstarAndMorgensternCodes()
        );

        $weaponCodesReflection = new \ReflectionClass('\DrdPlus\Codes\WeaponCodes');
        self::assertSame(
            array_values( // re-setting indexes
                array_filter(
                    array_values($weaponCodesReflection->getConstants()),
                    function ($code) {
                        return
                            strpos($code, 'morgenstern') !== false
                            || strpos($code, 'flail') !== false
                            || strpos($code, 'morningstar') !== false;
                    }
                )
            ),
            WeaponCodes::getMorningstarAndMorgensternCodes()
        );
    }
}