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
                            (strpos($code, 'knife') !== false && strpos($code, 'bowie') === false)
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

    /**
     * @test
     */
    public function I_can_get_saber_and_bowie_knife_codes_at_once()
    {
        self::assertSame(
            [
                'machete',
                'light_saber',
                'bowie_knife',
                'saber',
                'heavy_saber',
            ],
            WeaponCodes::getSaberAndBowieKnifeCodes()
        );

        $weaponCodesReflection = new \ReflectionClass('\DrdPlus\Codes\WeaponCodes');
        self::assertSame(
            array_values( // re-setting indexes
                array_filter(
                    array_values($weaponCodesReflection->getConstants()),
                    function ($code) {
                        return
                            strpos($code, 'machete') !== false
                            || strpos($code, 'bowie') !== false
                            || strpos($code, 'saber') !== false;
                    }
                )
            ),
            WeaponCodes::getSaberAndBowieKnifeCodes()
        );
    }

    /**
     * @test
     */
    public function I_can_get_staff_and_spear_codes()
    {
        self::assertSame(
            [
                'light_spear',
                'shortened_staff',
                'light_staff',
                'spear',
                'hobnailed_staff',
                'long_spear',
                'heavy_hobnailed_staff',
                'pike',
                'metal_staff',
            ],
            WeaponCodes::getStaffAndSpearCodes()
        );

        $weaponCodesReflection = new \ReflectionClass('\DrdPlus\Codes\WeaponCodes');
        self::assertSame(
            array_values( // re-setting indexes
                array_filter(
                    array_values($weaponCodesReflection->getConstants()),
                    function ($code) {
                        return
                            strpos($code, 'spear') !== false
                            || strpos($code, 'staff') !== false
                            || strpos($code, 'pike') !== false;
                    }
                )
            ),
            WeaponCodes::getStaffAndSpearCodes()
        );
    }
    /**
     * @test
     */
    public function I_can_get_sword_codes()
    {
        self::assertSame(
            [
                'short_sword',
                'hanger',
                'glaive',
                'long_sword',
                'one_and_half_handed_sword',
                'barbarian_sword',
                'two_handed_sword',
            ],
            WeaponCodes::getSwordCodes()
        );

        $weaponCodesReflection = new \ReflectionClass('\DrdPlus\Codes\WeaponCodes');
        self::assertSame(
            array_values( // re-setting indexes
                array_filter(
                    array_values($weaponCodesReflection->getConstants()),
                    function ($code) {
                        return
                            strpos($code, 'sword') !== false
                            || strpos($code, 'hanger') !== false
                            || strpos($code, 'glaive') !== false;
                    }
                )
            ),
            WeaponCodes::getSwordCodes()
        );
    }
}