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

    /**
     * @test
     */
    public function I_can_get_voulges_and_trident_codes()
    {
        self::assertSame(
            [
                'pitchfork',
                'light_voulge',
                'light_trident',
                'halberd',
                'heavy_voulge',
                'heavy_trident',
                'heavy_halberd',
            ],
            WeaponCodes::getVoulgeAndTridentCodes()
        );

        $weaponCodesReflection = new \ReflectionClass('\DrdPlus\Codes\WeaponCodes');
        self::assertSame(
            array_values( // re-setting indexes
                array_filter(
                    array_values($weaponCodesReflection->getConstants()),
                    function ($code) {
                        return
                            strpos($code, 'pitchfork') !== false
                            || strpos($code, 'voulge') !== false
                            || strpos($code, 'trident') !== false
                            || strpos($code, 'halberd') !== false;
                    }
                )
            ),
            WeaponCodes::getVoulgeAndTridentCodes()
        );
    }

    /**
     * @test
     */
    public function I_can_get_unarmed_codes()
    {
        self::assertSame(
            [
                'hand',
                'hobnailed_glove',
                'leg',
                'hobnailed_boot',
            ],
            WeaponCodes::getUnarmedCodes()
        );

        $weaponCodesReflection = new \ReflectionClass('\DrdPlus\Codes\WeaponCodes');
        self::assertSame(
            array_values( // re-setting indexes
                array_filter(
                    array_values($weaponCodesReflection->getConstants()),
                    function ($code) {
                        return
                            (strpos($code, 'hand') !== false && strpos($code, 'handed') === false)
                            || strpos($code, 'glove') !== false
                            || strpos($code, 'leg') !== false
                            || strpos($code, 'boot') !== false;
                    }
                )
            ),
            WeaponCodes::getUnarmedCodes()
        );
    }

    /**
     * @test
     */
    public function I_can_get_bow_codes()
    {
        self::assertSame(
            [
                'short_bow',
                'long_bow',
                'short_composite_bow',
                'long_composite_bow',
                'power_bow',
            ],
            WeaponCodes::getBowCodes()
        );

        $weaponCodesReflection = new \ReflectionClass('\DrdPlus\Codes\WeaponCodes');
        self::assertSame(
            array_values( // re-setting indexes
                array_filter(
                    array_values($weaponCodesReflection->getConstants()),
                    function ($code) {
                        return strpos($code, '_bow') !== false;
                    }
                )
            ),
            WeaponCodes::getBowCodes()
        );
    }

    /**
     * @test
     */
    public function I_can_get_arrow_codes()
    {
        self::assertSame(
            [
                'basic_arrow',
                'long_range_arrow',
                'war_arrow',
                'piercing_arrow',
                'hollow_arrow',
                'crippling_arrow',
                'flame_arrow',
                'silver_arrow',
            ],
            WeaponCodes::getArrowCodes()
        );

        $weaponCodesReflection = new \ReflectionClass('\DrdPlus\Codes\WeaponCodes');
        self::assertSame(
            array_values( // re-setting indexes
                array_filter(
                    array_values($weaponCodesReflection->getConstants()),
                    function ($code) {
                        return strpos($code, 'arrow') !== false;
                    }
                )
            ),
            WeaponCodes::getArrowCodes()
        );
    }

    /**
     * @test
     */
    public function I_can_get_crossbow_codes()
    {
        self::assertSame(
            [
                'minicrossbow',
                'light_crossbow',
                'military_crossbow',
                'heavy_crossbow',
            ],
            WeaponCodes::getCrossbowCodes()
        );

        $weaponCodesReflection = new \ReflectionClass('\DrdPlus\Codes\WeaponCodes');
        self::assertSame(
            array_values( // re-setting indexes
                array_filter(
                    array_values($weaponCodesReflection->getConstants()),
                    function ($code) {
                        return strpos($code, 'crossbow') !== false;
                    }
                )
            ),
            WeaponCodes::getCrossbowCodes()
        );
    }

    /**
     * @test
     */
    public function I_can_get_dart_codes()
    {
        self::assertSame(
            [
                'basic_dart',
                'war_dart',
                'piercing_dart',
                'hollow_dart',
                'silver_dart',
            ],
            WeaponCodes::getDartCodes()
        );

        $weaponCodesReflection = new \ReflectionClass('\DrdPlus\Codes\WeaponCodes');
        self::assertSame(
            array_values( // re-setting indexes
                array_filter(
                    array_values($weaponCodesReflection->getConstants()),
                    function ($code) {
                        return strpos($code, 'dart') !== false;
                    }
                )
            ),
            WeaponCodes::getDartCodes()
        );
    }
}