<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\MeleeWeaponCode;
use DrdPlus\Codes\RangeWeaponCode;

class RangeWeaponCodeTest extends WeaponCodeTest
{

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
            RangeWeaponCode::getBowCodes()
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
            RangeWeaponCode::getArrowCodes()
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
            RangeWeaponCode::getCrossbowCodes()
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
            RangeWeaponCode::getDartCodes()
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
            RangeWeaponCode::getThrowingWeaponCodes()
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
            RangeWeaponCode::getSlingStoneCodes()
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
            RangeWeaponCode::getRangeWeaponCodes(),
            'There are ' . (
            count($missingOrDifferent = array_diff_assoc($expectedValues, RangeWeaponCode::getRangeWeaponCodes())) > 0
                ? 'missing values or different keys in given: ' . var_export($missingOrDifferent, true)
                : 'superfluous values or different keys in given: ' . var_export(array_diff_assoc(RangeWeaponCode::getRangeWeaponCodes(), $expectedValues), true)
            )
        );
    }

    /**
     * @test
     */
    public function I_can_ask_code_if_is_specific_weapon_type()
    {
        $questions = [
            'isBow', 'isArrow', 'isCrossbow', 'isDart', 'isThrowingWeapon', 'isSlingStone'
        ];
        foreach (RangeWeaponCode::getBowCodes() as $codeValue) {
            $code = RangeWeaponCode::getIt($codeValue);
            self::assertTrue($code->isRangeWeapon());
            self::assertFalse($code->isMeleeWeapon());
            self::assertTrue($code->isBow());
            foreach ($questions as $question) {
                if ($question !== 'isBow') {
                    self::assertFalse($code->$question());
                }
            }
        }
        foreach (RangeWeaponCode::getArrowCodes() as $codeValue) {
            $code = RangeWeaponCode::getIt($codeValue);
            self::assertTrue($code->isRangeWeapon());
            self::assertFalse($code->isMeleeWeapon());
            self::assertTrue($code->isArrow());
            foreach ($questions as $question) {
                if ($question !== 'isArrow') {
                    self::assertFalse($code->$question());
                }
            }
        }
        foreach (RangeWeaponCode::getCrossbowCodes() as $codeValue) {
            $code = RangeWeaponCode::getIt($codeValue);
            self::assertTrue($code->isRangeWeapon());
            self::assertFalse($code->isMeleeWeapon());
            self::assertTrue($code->isCrossbow());
            foreach ($questions as $question) {
                if ($question !== 'isCrossbow') {
                    self::assertFalse($code->$question());
                }
            }
        }
        foreach (RangeWeaponCode::getDartCodes() as $codeValue) {
            $code = RangeWeaponCode::getIt($codeValue);
            self::assertTrue($code->isRangeWeapon());
            self::assertFalse($code->isMeleeWeapon());
            self::assertTrue($code->isDart());
            foreach ($questions as $question) {
                if ($question !== 'isDart') {
                    self::assertFalse($code->$question());
                }
            }
        }
        foreach (RangeWeaponCode::getThrowingWeaponCodes() as $codeValue) {
            $code = RangeWeaponCode::getIt($codeValue);
            self::assertTrue($code->isRangeWeapon());
            if ($codeValue !== RangeWeaponCode::SPEAR) {
                self::assertFalse($code->isMeleeWeapon());
            } else {
                self::assertTrue($code->isMeleeWeapon());
            }
            foreach ($questions as $question) {
                if ($question !== 'isThrowingWeapon') {
                    if ($question !== 'isStaffOrSpear' || $codeValue !== RangeWeaponCode::SPEAR) {
                        self::assertFalse($code->$question());
                    } else {
                        self::assertTrue($code->$question(), "{$codeValue} should be {$question}");
                    }
                }
            }
        }
        foreach (RangeWeaponCode::getSlingStoneCodes() as $codeValue) {
            $code = RangeWeaponCode::getIt($codeValue);
            self::assertTrue($code->isRangeWeapon());
            self::assertFalse($code->isMeleeWeapon());
            self::assertTrue($code->isSlingStone());
            foreach ($questions as $question) {
                if ($question !== 'isSlingStone') {
                    self::assertFalse($code->$question());
                }
            }
        }
    }

    /**
     * @test
     */
    public function I_can_convert_spear_to_melee_weapon_code()
    {
        $rangeSpear = RangeWeaponCode::getIt(RangeWeaponCode::SPEAR);
        self::assertInstanceOf(RangeWeaponCode::class, $rangeSpear);
        $meleeSpear = $rangeSpear->convertToMeleeWeaponCodeEquivalent();
        self::assertNotSame($rangeSpear, $meleeSpear);
        self::assertInstanceOf(MeleeWeaponCode::class, $meleeSpear);
        self::assertSame(MeleeWeaponCode::getIt(MeleeWeaponCode::SPEAR), $meleeSpear);
    }

    /**
     * @test
     * @expectedException \DrdPlus\Codes\Exceptions\CanNotBeConvertedToMeleeWeaponCode
     * @expectedExceptionMessageRegExp ~minicrossbow~
     */
    public function I_can_not_convert_anything_to_melee_weapon_code()
    {
        $rangeWeapon = RangeWeaponCode::getIt(RangeWeaponCode::MINICROSSBOW);
        self::assertFalse($rangeWeapon->isMeleeWeapon());
        $rangeWeapon->convertToMeleeWeaponCodeEquivalent();
    }

}