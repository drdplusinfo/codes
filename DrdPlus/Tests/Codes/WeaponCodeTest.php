<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\ArmamentCode;
use DrdPlus\Codes\WeaponCode;

class WeaponCodeTest extends AbstractCodeTest
{
    /**
     * @test
     */
    public function It_is_armament_code()
    {
        self::assertInstanceOf(ArmamentCode::class, WeaponCode::getIt(WeaponCode::AXE));
    }

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
                // 'spear',
                'javelin',
                'sling',
                'sling_stone_light',
                'sling_stone_heavier',
            ],
            WeaponCode::getWeaponCodes(),
            'There are ' . (
            count($missingOrDifferent = array_diff_assoc($expectedValues, WeaponCode::getWeaponCodes())) > 0
                ? 'missing values or different keys in given: ' . var_export($missingOrDifferent, true)
                : 'superfluous values or different keys in given: ' . var_export(array_diff_assoc(WeaponCode::getWeaponCodes(), $expectedValues), true)
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
            'isStaffOrSpear', 'isSword', 'isVoulgeOrTrident', 'isUnarmed', 'isBow', 'isArrow', 'isCrossbow',
            'isDart', 'isThrowingWeapon', 'isSlingStone'
        ];
        foreach (WeaponCode::getAxeCodes() as $codeValue) {
            $code = WeaponCode::getIt($codeValue);
            self::assertTrue($code->isAxe());
            foreach ($questions as $question) {
                if ($question !== 'isAxe') {
                    self::assertFalse($code->$question());
                }
            }
        }
        foreach (WeaponCode::getKnifeAndDaggerCodes() as $codeValue) {
            $code = WeaponCode::getIt($codeValue);
            self::assertTrue($code->isKnifeOrDagger());
            foreach ($questions as $question) {
                if ($question !== 'isKnifeOrDagger') {
                    self::assertFalse($code->$question());
                }
            }
        }
        foreach (WeaponCode::getMaceAndClubCodes() as $codeValue) {
            $code = WeaponCode::getIt($codeValue);
            self::assertTrue($code->isMaceOrClub());
            foreach ($questions as $question) {
                if ($question !== 'isMaceOrClub') {
                    self::assertFalse($code->$question());
                }
            }
        }
        foreach (WeaponCode::getMorningstarAndMorgensternCodes() as $codeValue) {
            $code = WeaponCode::getIt($codeValue);
            self::assertTrue($code->isMorningStarOrMorgenstern());
            foreach ($questions as $question) {
                if ($question !== 'isMorningStarOrMorgenstern') {
                    self::assertFalse($code->$question());
                }
            }
        }
        foreach (WeaponCode::getSaberAndBowieKnifeCodes() as $codeValue) {
            $code = WeaponCode::getIt($codeValue);
            self::assertTrue($code->isSaberOrBowieKnife());
            foreach ($questions as $question) {
                if ($question !== 'isSaberOrBowieKnife') {
                    self::assertFalse($code->$question());
                }
            }
        }
        foreach (WeaponCode::getStaffAndSpearCodes() as $codeValue) {
            $code = WeaponCode::getIt($codeValue);
            self::assertTrue($code->isStaffOrSpear());
            foreach ($questions as $question) {
                if ($question !== 'isStaffOrSpear') {
                    if ($question !== 'isThrowingWeapon' || $codeValue !== WeaponCode::SPEAR) {
                        self::assertFalse($code->$question());
                    } else {
                        self::assertTrue($code->$question());
                    }
                }
            }
        }
        foreach (WeaponCode::getSwordCodes() as $codeValue) {
            $code = WeaponCode::getIt($codeValue);
            self::assertTrue($code->isSword());
            foreach ($questions as $question) {
                if ($question !== 'isSword') {
                    self::assertFalse($code->$question());
                }
            }
        }
        foreach (WeaponCode::getVoulgeAndTridentCodes() as $codeValue) {
            $code = WeaponCode::getIt($codeValue);
            self::assertTrue($code->isVoulgeOrTrident());
            foreach ($questions as $question) {
                if ($question !== 'isVoulgeOrTrident') {
                    self::assertFalse($code->$question());
                }
            }
        }
        foreach (WeaponCode::getUnarmedCodes() as $codeValue) {
            $code = WeaponCode::getIt($codeValue);
            self::assertTrue($code->isUnarmed());
            foreach ($questions as $question) {
                if ($question !== 'isUnarmed') {
                    self::assertFalse($code->$question());
                }
            }
        }
        foreach (WeaponCode::getBowCodes() as $codeValue) {
            $code = WeaponCode::getIt($codeValue);
            self::assertTrue($code->isBow());
            foreach ($questions as $question) {
                if ($question !== 'isBow') {
                    self::assertFalse($code->$question());
                }
            }
        }
        foreach (WeaponCode::getArrowCodes() as $codeValue) {
            $code = WeaponCode::getIt($codeValue);
            self::assertTrue($code->isArrow());
            foreach ($questions as $question) {
                if ($question !== 'isArrow') {
                    self::assertFalse($code->$question());
                }
            }
        }
        foreach (WeaponCode::getCrossbowCodes() as $codeValue) {
            $code = WeaponCode::getIt($codeValue);
            self::assertTrue($code->isCrossbow());
            foreach ($questions as $question) {
                if ($question !== 'isCrossbow') {
                    self::assertFalse($code->$question());
                }
            }
        }
        foreach (WeaponCode::getDartCodes() as $codeValue) {
            $code = WeaponCode::getIt($codeValue);
            self::assertTrue($code->isDart());
            foreach ($questions as $question) {
                if ($question !== 'isDart') {
                    self::assertFalse($code->$question());
                }
            }
        }
        foreach (WeaponCode::getThrowingWeaponCodes() as $codeValue) {
            $code = WeaponCode::getIt($codeValue);
            self::assertTrue($code->isThrowingWeapon());
            foreach ($questions as $question) {
                if ($question !== 'isThrowingWeapon') {
                    if ($question !== 'isStaffOrSpear' || $codeValue !== WeaponCode::SPEAR) {
                        self::assertFalse($code->$question());
                    } else {
                        self::assertTrue($code->$question(), "{$codeValue} should be {$question}");
                    }
                }
            }
        }
        foreach (WeaponCode::getSlingStoneCodes() as $codeValue) {
            $code = WeaponCode::getIt($codeValue);
            self::assertTrue($code->isSlingStone());
            foreach ($questions as $question) {
                if ($question !== 'isSlingStone') {
                    self::assertFalse($code->$question());
                }
            }
        }
    }

}