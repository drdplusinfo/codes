<?php
namespace DrdPlus\Tests\Codes\Armaments;

use DrdPlus\Codes\Armaments\Exceptions\CanNotBeConvertedToRangeWeaponCode;
use DrdPlus\Codes\Armaments\MeleeWeaponCode;
use DrdPlus\Codes\Armaments\RangedWeaponCode;
use DrdPlus\Codes\Armaments\WeaponCategoryCode;
use DrdPlus\Codes\Partials\Exceptions\UnknownValueForCode;

class MeleeWeaponCodeTest extends WeaponCodeTest
{
    use MeleeWeaponlikeCodeTrait;

    /**
     * @param string $weaponlikeCode
     * @param string $interferingCodeClass
     * @return bool
     */
    protected function isSameCodeAllowedFor(string $weaponlikeCode, string $interferingCodeClass): bool
    {
        try {
            return is_a(MeleeWeaponCode::getIt($weaponlikeCode)->convertToRangedWeaponCodeEquivalent(), $interferingCodeClass);
        } catch (CanNotBeConvertedToRangeWeaponCode $canNotBeConvertedToRangeWeaponCode) {
            return false;
        } catch (UnknownValueForCode $unknownValueForCode) {
            return false;
        }
    }

    /**
     * @test
     */
    public function It_is_melee_weapon_code()
    {
        /** @var MeleeWeaponCode $sut */
        $sut = $this->getSut();
        self::assertInstanceOf(MeleeWeaponCode::class, $sut);
        self::assertTrue($sut->isMeleeWeapon());
    }

    /**
     * @test
     */
    public function I_can_easily_find_out_if_is_melee()
    {
        /** @var MeleeWeaponCode $sut */
        $sut = $this->getSut();
        self::assertTrue($sut->isMelee());
    }

    /**
     * @test
     */
    public function I_can_get_axe_codes()
    {
        self::assertSame(
            [
                'light_axe',
                'axe',
                'war_axe',
                'two_handed_axe',
            ],
            MeleeWeaponCode::getAxeValues()
        );
    }

    /**
     * @test
     */
    public function I_can_get_knife_and_dagger_codes()
    {
        self::assertSame(
            [
                'knife',
                'dagger',
                'stabbing_dagger',
                'long_knife',
                'long_dagger',
            ],
            MeleeWeaponCode::getKnifeAndDaggerValues()
        );
    }

    /**
     * @test
     */
    public function I_can_get_mace_and_club_codes()
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
            MeleeWeaponCode::getMaceAndClubValues()
        );
    }

    /**
     * @test
     */
    public function I_can_get_morningstar_and_morgenstern_codes()
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
            MeleeWeaponCode::getMorningstarAndMorgensternValues()
        );
    }

    /**
     * @test
     */
    public function I_can_get_saber_and_bowie_knife_codes()
    {
        self::assertSame(
            [
                'machete',
                'light_saber',
                'bowie_knife',
                'saber',
                'heavy_saber',
            ],
            MeleeWeaponCode::getSaberAndBowieKnifeValues()
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
            MeleeWeaponCode::getStaffAndSpearValues()
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
            MeleeWeaponCode::getSwordValues()
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
            MeleeWeaponCode::getVoulgeAndTridentValues()
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
            MeleeWeaponCode::getUnarmedValues()
        );
    }

    /**
     * @test
     */
    public function I_can_get_all_codes_at_once_or_by_same_named_constant()
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
            MeleeWeaponCode::getPossibleValues(),
            'There are ' . (
            count($missingOrDifferent = array_diff_assoc($expectedValues, MeleeWeaponCode::getPossibleValues())) > 0
                ? 'missing values or different keys in given: ' . var_export($missingOrDifferent, true)
                : 'superfluous values or different keys in given: ' . var_export(array_diff_assoc(MeleeWeaponCode::getPossibleValues(), $expectedValues), true)
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
        foreach (MeleeWeaponCode::getAxeValues() as $codeValue) {
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
        foreach (MeleeWeaponCode::getKnifeAndDaggerValues() as $codeValue) {
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
        foreach (MeleeWeaponCode::getMaceAndClubValues() as $codeValue) {
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
        foreach (MeleeWeaponCode::getMorningstarAndMorgensternValues() as $codeValue) {
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
        foreach (MeleeWeaponCode::getSaberAndBowieKnifeValues() as $codeValue) {
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
        foreach (MeleeWeaponCode::getStaffAndSpearValues() as $codeValue) {
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
        foreach (MeleeWeaponCode::getSwordValues() as $codeValue) {
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
        foreach (MeleeWeaponCode::getVoulgeAndTridentValues() as $codeValue) {
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
        foreach (MeleeWeaponCode::getUnarmedValues() as $codeValue) {
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
        foreach (MeleeWeaponCode::getPossibleValues() as $meleeWeaponCode) {
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

    /**
     * @test
     */
    public function I_can_easily_find_out_if_weapon_is_unarmed_in_fact()
    {
        foreach (MeleeWeaponCode::getPossibleValues() as $meleeWeaponCodeValue) {
            $meleeWeaponCode = MeleeWeaponCode::getIt($meleeWeaponCodeValue);
            self::assertSame(
                in_array($meleeWeaponCodeValue, MeleeWeaponCode::getUnarmedValues(), true),
                $meleeWeaponCode->isUnarmed()
            );
        }
        self::assertSame(
            [
                MeleeWeaponCode::HAND,
                MeleeWeaponCode::HOBNAILED_GLOVE,
                MeleeWeaponCode::LEG,
                MeleeWeaponCode::HOBNAILED_BOOT,
            ],
            MeleeWeaponCode::getUnarmedValues()
        );
    }

    /**
     * @test
     */
    public function I_can_easily_find_out_if_is_ranged()
    {
        self::assertFalse(MeleeWeaponCode::getIt(MeleeWeaponCode::CUDGEL)->isRanged());
    }

    protected function getWeaponCategoryValues(): array
    {
        return WeaponCategoryCode::getMeleeWeaponCategoryValues();
    }

    /**
     * @test
     * @expectedException \DrdPlus\Codes\Armaments\Exceptions\InvalidWeaponCategoryForNewMeleeWeaponCode
     * @expectedExceptionMessageRegExp ~throwing~
     */
    public function I_can_not_add_new_melee_weapon_code_with_not_melee_category()
    {
        $throwingCategory = WeaponCategoryCode::getIt(WeaponCategoryCode::THROWING_WEAPON);
        self::assertFalse($throwingCategory->isMeleeWeaponCategory());
        MeleeWeaponCode::addNewMeleeWeaponCode('foo', $throwingCategory, []);
    }

    /**
     * @test
     * @expectedException \DrdPlus\Codes\Armaments\Exceptions\MeleeWeaponIsAlreadyInDifferentWeaponCategory
     */
    public function I_can_not_extended_it_by_same_code_but_different_category()
    {
        $reflectionClass = new \ReflectionClass(MeleeWeaponCode::class);
        $translations = $reflectionClass->getProperty('translations');
        $translations->setAccessible(true);
        // to reset already initialized translations and force them to be loaded again
        $translations->setValue(null);
        $translations->setAccessible(false);
        self::assertNotContains('corge', MeleeWeaponCode::getPossibleValues());
        self::assertTrue(
            MeleeWeaponCode::addNewMeleeWeaponCode('corge', $someCategory = $this->getRandomWeaponCategoryCode(), [])
        );
        $differentCategory = $this->getRandomWeaponCategoryCode($someCategory);
        self::assertNotEquals($someCategory, $differentCategory);
        MeleeWeaponCode::addNewMeleeWeaponCode('corge', $differentCategory, []);
    }

}