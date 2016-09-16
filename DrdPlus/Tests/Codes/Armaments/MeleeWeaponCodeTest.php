<?php
namespace DrdPlus\Tests\Codes\Armaments;

use DrdPlus\Codes\Armaments\MeleeWeaponCode;
use DrdPlus\Codes\Armaments\RangedWeaponCode;

class MeleeWeaponCodeTest extends WeaponCodeTest
{
    use MeleeWeaponlikeCodeTrait;

    /**
     * @test
     */
    public function It_is_melee_weapon_code()
    {
        $reflection = new \ReflectionClass($this->getSutClass());
        /** @var MeleeWeaponCode $meleeWeaponCode */
        $meleeWeaponCode = $reflection->newInstanceWithoutConstructor();
        self::assertInstanceOf(MeleeWeaponCode::class, $meleeWeaponCode);
        self::assertTrue($meleeWeaponCode->isMeleeWeapon());
    }

    /**
     * @test
     */
    public function I_can_easily_find_out_if_is_melee_armament()
    {
        $reflection = new \ReflectionClass($this->getSutClass());
        /** @var MeleeWeaponCode $sut */
        $sut = $reflection->newInstanceWithoutConstructor();
        self::assertTrue($sut->isMelee());
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
            'isAxe', 'isKnifeOrDagger', 'isMaceOrClub', 'isMorningstarOrMorgenstern', 'isSaberOrBowieKnife',
            'isStaffOrSpear', 'isSword', 'isVoulgeOrTrident', 'isUnarmed',
        ];
        foreach (MeleeWeaponCode::getAxeCodes() as $codeValue) {
            $code = MeleeWeaponCode::getIt($codeValue);
            self::assertTrue($code->isMelee());
            self::assertFalse($code->isRanged());
            self::assertTrue($code->isAxe());
            foreach ($questions as $question) {
                if ($question !== 'isAxe') {
                    self::assertFalse($code->$question());
                }
            }
        }
        foreach (MeleeWeaponCode::getKnifeAndDaggerCodes() as $codeValue) {
            $code = MeleeWeaponCode::getIt($codeValue);
            self::assertTrue($code->isMelee());
            self::assertFalse($code->isRanged());
            self::assertTrue($code->isKnifeOrDagger());
            foreach ($questions as $question) {
                if ($question !== 'isKnifeOrDagger') {
                    self::assertFalse($code->$question());
                }
            }
        }
        foreach (MeleeWeaponCode::getMaceAndClubCodes() as $codeValue) {
            $code = MeleeWeaponCode::getIt($codeValue);
            self::assertTrue($code->isMelee());
            self::assertFalse($code->isRanged());
            self::assertTrue($code->isMaceOrClub());
            foreach ($questions as $question) {
                if ($question !== 'isMaceOrClub') {
                    self::assertFalse($code->$question());
                }
            }
        }
        foreach (MeleeWeaponCode::getMorningstarAndMorgensternCodes() as $codeValue) {
            $code = MeleeWeaponCode::getIt($codeValue);
            self::assertTrue($code->isMelee());
            self::assertFalse($code->isRanged());
            self::assertTrue($code->isMorningstarOrMorgenstern());
            foreach ($questions as $question) {
                if ($question !== 'isMorningstarOrMorgenstern') {
                    self::assertFalse($code->$question());
                }
            }
        }
        foreach (MeleeWeaponCode::getSaberAndBowieKnifeCodes() as $codeValue) {
            $code = MeleeWeaponCode::getIt($codeValue);
            self::assertTrue($code->isMelee());
            self::assertFalse($code->isRanged());
            self::assertTrue($code->isSaberOrBowieKnife());
            foreach ($questions as $question) {
                if ($question !== 'isSaberOrBowieKnife') {
                    self::assertFalse($code->$question());
                }
            }
        }
        foreach (MeleeWeaponCode::getStaffAndSpearCodes() as $codeValue) {
            $code = MeleeWeaponCode::getIt($codeValue);
            self::assertTrue($code->isMelee());
            if ($codeValue !== MeleeWeaponCode::SPEAR) {
                self::assertFalse($code->isRanged());
            } else {
                self::assertTrue($code->isRanged());
            }
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
            self::assertTrue($code->isMelee());
            self::assertFalse($code->isRanged());
            self::assertTrue($code->isSword());
            foreach ($questions as $question) {
                if ($question !== 'isSword') {
                    self::assertFalse($code->$question());
                }
            }
        }
        foreach (MeleeWeaponCode::getVoulgeAndTridentCodes() as $codeValue) {
            $code = MeleeWeaponCode::getIt($codeValue);
            self::assertTrue($code->isMelee());
            self::assertFalse($code->isRanged());
            self::assertTrue($code->isVoulgeOrTrident());
            foreach ($questions as $question) {
                if ($question !== 'isVoulgeOrTrident') {
                    self::assertFalse($code->$question());
                }
            }
        }
        foreach (MeleeWeaponCode::getUnarmedCodes() as $codeValue) {
            $code = MeleeWeaponCode::getIt($codeValue);
            self::assertTrue($code->isMelee());
            self::assertFalse($code->isRanged());
            self::assertTrue($code->isUnarmed());
            foreach ($questions as $question) {
                if ($question !== 'isUnarmed') {
                    self::assertFalse($code->$question());
                }
            }
        }
    }

    /**
     * @test
     */
    public function I_can_convert_spear_to_range_weapon_code()
    {
        $meleeSpear = MeleeWeaponCode::getIt(MeleeWeaponCode::SPEAR);
        self::assertInstanceOf(MeleeWeaponCode::class, $meleeSpear);
        self::assertSame($meleeSpear, $meleeSpear->convertToMeleeWeaponCodeEquivalent());
        $rangeSpear = $meleeSpear->convertToRangedWeaponCodeEquivalent();
        self::assertNotSame($meleeSpear, $rangeSpear);
        self::assertInstanceOf(RangedWeaponCode::class, $rangeSpear);
        self::assertSame(RangedWeaponCode::getIt(RangedWeaponCode::SPEAR), $rangeSpear);
    }

    /**
     * @test
     * @expectedException \DrdPlus\Codes\Armaments\Exceptions\CanNotBeConvertedToRangeWeaponCode
     * @expectedExceptionMessageRegExp ~cudgel~
     */
    public function I_can_not_convert_anything_to_melee_weapon_code()
    {
        $wantItRange = MeleeWeaponCode::getIt(MeleeWeaponCode::CUDGEL);
        self::assertFalse($wantItRange->isRanged());
        $wantItRange->convertToRangedWeaponCodeEquivalent();
    }

    /**
     * @test
     */
    public function I_get_from_melee_code_negative_answer_to_most_range_question()
    {
        foreach (MeleeWeaponCode::getMeleeWeaponCodes() as $meleeWeaponCode) {
            $meleeWeaponCode = MeleeWeaponCode::getIt($meleeWeaponCode);
            self::assertTrue($meleeWeaponCode->isMelee());
            if ($meleeWeaponCode->getValue() !== MeleeWeaponCode::SPEAR) {
                self::assertFalse($meleeWeaponCode->isRanged());
                self::assertFalse($meleeWeaponCode->isThrowingWeapon());
            } else {
                self::assertTrue($meleeWeaponCode->isRanged());
                self::assertTrue($meleeWeaponCode->isThrowingWeapon());
            }
            self::assertFalse($meleeWeaponCode->isShootingWeapon());
            self::assertFalse($meleeWeaponCode->isProjectile());
        }
    }

    /**
     * @test
     */
    public function I_can_easily_find_out_if_is_shield()
    {
        self::assertFalse(MeleeWeaponCode::getIt(MeleeWeaponCode::CLUB)->isShield());
    }

    /**
     * @test
     */
    public function I_can_easily_find_out_if_is_melee_weapon()
    {
        self::assertTrue(MeleeWeaponCode::getIt(MeleeWeaponCode::CLUB)->isMeleeWeapon());
    }

}