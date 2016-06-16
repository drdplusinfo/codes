<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\WeaponCode;

class WeaponCodeTest extends AbstractCodesTest
{
    /**
     * @test
     */
    public function I_can_get_axe_codes()
    {
        self::assertSame(
            $expectedCodes = [
                'light_axe',
                'axe',
                'war_axe',
                'two_handed_axe',
            ],
            WeaponCode::getAxeCodes()
        );

        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }

    /**
     * @test
     */
    public function I_can_get_knife_and_dagger_codes()
    {
        self::assertSame(
            $expectedCodes = [
                'knife',
                'dagger',
                'stabbing_dagger',
                'long_knife',
                'long_dagger',
            ],
            WeaponCode::getKnifeAndDaggerCodes()
        );

        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }

    /**
     * @test
     */
    public function I_can_get_mace_and_club_codes()
    {
        self::assertSame(
            $expectedCodes = [
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
            WeaponCode::getMaceAndClubCodes()
        );

        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }

    /**
     * @test
     */
    public function I_can_get_morningstar_and_morgenstern_codes()
    {
        self::assertSame(
            $expectedCodes = [
                'light_morgenstern',
                'morgenstern',
                'heavy_morgenstern',
                'flail',
                'morningstar',
                'hobnailed_flail',
                'heavy_morningstar',
            ],
            WeaponCode::getMorningstarAndMorgensternCodes()
        );

        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }

    /**
     * @test
     */
    public function I_can_get_saber_and_bowie_knife_codes()
    {
        self::assertSame(
            $expectedCodes = [
                'machete',
                'light_saber',
                'bowie_knife',
                'saber',
                'heavy_saber',
            ],
            WeaponCode::getSaberAndBowieKnifeCodes()
        );

        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }

    /**
     * @test
     */
    public function I_can_get_staff_and_spear_codes()
    {
        self::assertSame(
            $expectedCodes = [
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
            WeaponCode::getStaffAndSpearCodes()
        );

        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }

    /**
     * @test
     */
    public function I_can_get_sword_codes()
    {
        self::assertSame(
            $expectedCodes = [
                'short_sword',
                'hanger',
                'glaive',
                'long_sword',
                'one_and_half_handed_sword',
                'barbarian_sword',
                'two_handed_sword',
            ],
            WeaponCode::getSwordCodes()
        );

        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }

    /**
     * @test
     */
    public function I_can_get_voulges_and_trident_codes()
    {
        self::assertSame(
            $expectedCodes = [
                'pitchfork',
                'light_voulge',
                'light_trident',
                'halberd',
                'heavy_voulge',
                'heavy_trident',
                'heavy_halberd',
            ],
            WeaponCode::getVoulgeAndTridentCodes()
        );

        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }

    /**
     * @test
     */
    public function I_can_get_unarmed_codes()
    {
        self::assertSame(
            $expectedCodes = [
                'hand',
                'hobnailed_glove',
                'leg',
                'hobnailed_boot',
            ],
            WeaponCode::getUnarmedCodes()
        );

        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }

    /**
     * @test
     */
    public function I_can_get_bow_codes()
    {
        self::assertSame(
            $expectedCodes = [
                'short_bow',
                'long_bow',
                'short_composite_bow',
                'long_composite_bow',
                'power_bow',
            ],
            WeaponCode::getBowCodes()
        );

        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }

    /**
     * @test
     */
    public function I_can_get_arrow_codes()
    {
        self::assertSame(
            $expectedCodes = [
                'basic_arrow',
                'long_range_arrow',
                'war_arrow',
                'piercing_arrow',
                'hollow_arrow',
                'crippling_arrow',
                'incendiary_arrow',
                'silver_arrow',
            ],
            WeaponCode::getArrowCodes()
        );

        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }

    /**
     * @test
     */
    public function I_can_get_crossbow_codes()
    {
        self::assertSame(
            $expectedCodes = [
                'minicrossbow',
                'light_crossbow',
                'military_crossbow',
                'heavy_crossbow',
            ],
            WeaponCode::getCrossbowCodes()
        );

        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }

    /**
     * @test
     */
    public function I_can_get_dart_codes()
    {
        self::assertSame(
            $expectedCodes = [
                'basic_dart',
                'war_dart',
                'piercing_dart',
                'hollow_dart',
                'silver_dart',
            ],
            WeaponCode::getDartCodes()
        );

        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }

    /**
     * @test
     */
    public function I_can_get_throwing_weapon_codes()
    {
        self::assertSame(
            $expectedCodes = [
                'rock',
                'throwing_dagger',
                'light_throwing_axe',
                'war_throwing_axe',
                'throwing_hammer',
                'shuriken',
                'spear',
                'javelin',
                'sling',
            ],
            WeaponCode::getThrowingWeaponCodes()
        );

        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }

    /**
     * @test
     */
    public function I_can_get_sling_stone_codes()
    {
        self::assertSame(
            $expectedCodes = [
                'sling_stone_light',
                'sling_stone_heavier',
            ],
            WeaponCode::getSlingStoneCodes()
        );

        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }

    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
    {
        self::assertSame(
            [
                // axes
                'light_axe',
                'axe',
                'war_axe',
                'two_handed_axe',
                // knifes and daggers
                'knife',
                'dagger',
                'stabbing_dagger',
                'long_knife',
                'long_dagger',
                // maces and clubs
                'cudgel',
                'club',
                'hobnailed_club',
                'light_mace',
                'mace',
                'heavy_club',
                'war_hammer',
                'two_handed_club',
                'heavy_sledgehammer',
                // morningstars and morgensterns
                'light_morgenstern',
                'morgenstern',
                'heavy_morgenstern',
                'flail',
                'morningstar',
                'hobnailed_flail',
                'heavy_morningstar',
                // sabers and bowie knifes
                'machete',
                'light_saber',
                'bowie_knife',
                'saber',
                'heavy_saber',
                // staffs and spears
                'light_spear',
                'shortened_staff',
                'light_staff',
                'spear',
                'hobnailed_staff',
                'long_spear',
                'heavy_hobnailed_staff',
                'pike',
                'metal_staff',
                // swords
                'short_sword',
                'hanger',
                'glaive',
                'long_sword',
                'one_and_half_handed_sword',
                'barbarian_sword',
                'two_handed_sword',
                // voulges and tridents
                'pitchfork',
                'light_voulge',
                'light_trident',
                'halberd',
                'heavy_voulge',
                'heavy_trident',
                'heavy_halberd',
                // unarmed
                'hand',
                'hobnailed_glove',
                'leg',
                'hobnailed_boot',
                // bows
                'short_bow',
                'long_bow',
                'short_composite_bow',
                'long_composite_bow',
                'power_bow',
                // arrows
                'basic_arrow',
                'long_range_arrow',
                'war_arrow',
                'piercing_arrow',
                'hollow_arrow',
                'crippling_arrow',
                'incendiary_arrow',
                'silver_arrow',
                // crossbows
                'minicrossbow',
                'light_crossbow',
                'military_crossbow',
                'heavy_crossbow',
                // darts
                'basic_dart',
                'war_dart',
                'piercing_dart',
                'hollow_dart',
                'silver_dart',
                // throwing weapons
                'rock',
                'throwing_dagger',
                'light_throwing_axe',
                'war_throwing_axe',
                'throwing_hammer',
                'shuriken',
                'spear',
                'javelin',
                'sling',
                'sling_stone_light',
                'sling_stone_heavier',
            ],
            WeaponCode::getWeaponCodes()
        );
    }

}