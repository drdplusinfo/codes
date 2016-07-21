<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\MeleeWeaponCode;

class MeleeWeaponCodeTest extends WeaponCodeTest
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
            MeleeWeaponCode::getAxeCodes()
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
            MeleeWeaponCode::getKnifeAndDaggerCodes()
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
            MeleeWeaponCode::getMaceAndClubCodes()
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
            MeleeWeaponCode::getMorningstarAndMorgensternCodes()
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
            MeleeWeaponCode::getSaberAndBowieKnifeCodes()
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
            MeleeWeaponCode::getStaffAndSpearCodes()
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
            MeleeWeaponCode::getSwordCodes()
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
            MeleeWeaponCode::getVoulgeAndTridentCodes()
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
            MeleeWeaponCode::getUnarmedCodes()
        );

        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }

    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
    {
        self::assertSame(
            $expectedValues = [
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
            ],
            MeleeWeaponCode::getMeleeWeaponCodes(),
            'There are ' . (
            count($missingOrDifferent = array_diff_assoc($expectedValues, MeleeWeaponCode::getMeleeWeaponCodes())) > 0
                ? 'missing values or different keys in given: ' . var_export($missingOrDifferent, true)
                : 'superfluous values or different keys in given: ' . var_export(array_diff_assoc(MeleeWeaponCode::getMeleeWeaponCodes(), $expectedValues), true)
            )
        );
    }

    /**
     * @test
     */
    public function I_can_ask_code_if_is_specific_weapon_type()
    {
        $questions = [
            'isAxe', 'isKnifeOrDagger', 'isMaceOrClub', 'isMorningStarOrMorgenstern', 'isSaberOrBowieKnife',
            'isStaffOrSpear', 'isSword', 'isVoulgeOrTrident', 'isUnarmed'
        ];
        foreach (MeleeWeaponCode::getAxeCodes() as $codeValue) {
            $code = MeleeWeaponCode::getIt($codeValue);
            self::assertTrue($code->isMeleeWeapon());
            self::assertFalse($code->isShootingWeapon());
            self::assertTrue($code->isAxe());
            foreach ($questions as $question) {
                if ($question !== 'isAxe') {
                    self::assertFalse($code->$question());
                }
            }
        }
        foreach (MeleeWeaponCode::getKnifeAndDaggerCodes() as $codeValue) {
            $code = MeleeWeaponCode::getIt($codeValue);
            self::assertTrue($code->isMeleeWeapon());
            self::assertFalse($code->isShootingWeapon());
            self::assertTrue($code->isKnifeOrDagger());
            foreach ($questions as $question) {
                if ($question !== 'isKnifeOrDagger') {
                    self::assertFalse($code->$question());
                }
            }
        }
        foreach (MeleeWeaponCode::getMaceAndClubCodes() as $codeValue) {
            $code = MeleeWeaponCode::getIt($codeValue);
            self::assertTrue($code->isMeleeWeapon());
            self::assertFalse($code->isShootingWeapon());
            self::assertTrue($code->isMaceOrClub());
            foreach ($questions as $question) {
                if ($question !== 'isMaceOrClub') {
                    self::assertFalse($code->$question());
                }
            }
        }
        foreach (MeleeWeaponCode::getMorningstarAndMorgensternCodes() as $codeValue) {
            $code = MeleeWeaponCode::getIt($codeValue);
            self::assertTrue($code->isMeleeWeapon());
            self::assertFalse($code->isShootingWeapon());
            self::assertTrue($code->isMorningStarOrMorgenstern());
            foreach ($questions as $question) {
                if ($question !== 'isMorningStarOrMorgenstern') {
                    self::assertFalse($code->$question());
                }
            }
        }
        foreach (MeleeWeaponCode::getSaberAndBowieKnifeCodes() as $codeValue) {
            $code = MeleeWeaponCode::getIt($codeValue);
            self::assertTrue($code->isMeleeWeapon());
            self::assertFalse($code->isShootingWeapon());
            self::assertTrue($code->isSaberOrBowieKnife());
            foreach ($questions as $question) {
                if ($question !== 'isSaberOrBowieKnife') {
                    self::assertFalse($code->$question());
                }
            }
        }
        foreach (MeleeWeaponCode::getStaffAndSpearCodes() as $codeValue) {
            $code = MeleeWeaponCode::getIt($codeValue);
            self::assertTrue($code->isMeleeWeapon());
            self::assertFalse($code->isShootingWeapon());
            self::assertTrue($code->isStaffOrSpear());
            foreach ($questions as $question) {
                if ($question !== 'isStaffOrSpear') {
                    if ($question !== 'isThrowingWeapon' || $codeValue !== MeleeWeaponCode::SPEAR) {
                        self::assertFalse($code->$question());
                    } else {
                        self::assertTrue($code->$question());
                    }
                }
            }
        }
        foreach (MeleeWeaponCode::getSwordCodes() as $codeValue) {
            $code = MeleeWeaponCode::getIt($codeValue);
            self::assertTrue($code->isMeleeWeapon());
            self::assertFalse($code->isShootingWeapon());
            self::assertTrue($code->isSword());
            foreach ($questions as $question) {
                if ($question !== 'isSword') {
                    self::assertFalse($code->$question());
                }
            }
        }
        foreach (MeleeWeaponCode::getVoulgeAndTridentCodes() as $codeValue) {
            $code = MeleeWeaponCode::getIt($codeValue);
            self::assertTrue($code->isMeleeWeapon());
            self::assertFalse($code->isShootingWeapon());
            self::assertTrue($code->isVoulgeOrTrident());
            foreach ($questions as $question) {
                if ($question !== 'isVoulgeOrTrident') {
                    self::assertFalse($code->$question());
                }
            }
        }
        foreach (MeleeWeaponCode::getUnarmedCodes() as $codeValue) {
            $code = MeleeWeaponCode::getIt($codeValue);
            self::assertTrue($code->isMeleeWeapon());
            self::assertFalse($code->isShootingWeapon());
            self::assertTrue($code->isUnarmed());
            foreach ($questions as $question) {
                if ($question !== 'isUnarmed') {
                    self::assertFalse($code->$question());
                }
            }
        }
    }

}