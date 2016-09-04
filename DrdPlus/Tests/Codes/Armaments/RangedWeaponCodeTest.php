<?php
namespace DrdPlus\Tests\Codes\Armaments;

use DrdPlus\Codes\Armaments\MeleeWeaponCode;
use DrdPlus\Codes\Armaments\RangedWeaponCode;

class RangedWeaponCodeTest extends WeaponCodeTest
{

    /**
     * @test
     */
    public function I_can_easily_find_out_if_is_melee_armament()
    {
        $reflection = new \ReflectionClass($this->getSutClass());
        /** @var RangedWeaponCode $sut */
        $sut = $reflection->newInstanceWithoutConstructor();
        self::assertFalse($sut->isMeleeArmament());
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
            RangedWeaponCode::getBowCodes()
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
            RangedWeaponCode::getArrowCodes()
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
            RangedWeaponCode::getCrossbowCodes()
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
            RangedWeaponCode::getDartCodes()
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
            RangedWeaponCode::getThrowingWeaponCodes()
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
            RangedWeaponCode::getSlingStoneCodes()
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
            RangedWeaponCode::getRangedWeaponCodes(),
            'There are ' . (
            count($missingOrDifferent = array_diff_assoc($expectedValues, RangedWeaponCode::getRangedWeaponCodes())) > 0
                ? 'missing values or different keys in given: ' . var_export($missingOrDifferent, true)
                : 'superfluous values or different keys in given: ' . var_export(array_diff_assoc(RangedWeaponCode::getRangedWeaponCodes(), $expectedValues), true)
            )
        );
    }

    /**
     * @test
     */
    public function I_can_ask_code_if_is_specific_weapon_type()
    {
        $questions = [
            'isBow', 'isArrow', 'isCrossbow', 'isDart', 'isThrowingWeapon', 'isSlingStone',
        ];
        foreach (RangedWeaponCode::getBowCodes() as $codeValue) {
            $code = RangedWeaponCode::getIt($codeValue);
            self::assertTrue($code->isRangedWeapon());
            self::assertFalse($code->isMeleeArmament());
            self::assertTrue($code->isBow());
            foreach ($questions as $question) {
                if ($question !== 'isBow') {
                    self::assertFalse($code->$question());
                }
            }
        }
        foreach (RangedWeaponCode::getArrowCodes() as $codeValue) {
            $code = RangedWeaponCode::getIt($codeValue);
            self::assertTrue($code->isRangedWeapon());
            self::assertFalse($code->isMeleeArmament());
            self::assertTrue($code->isArrow());
            foreach ($questions as $question) {
                if ($question !== 'isArrow') {
                    self::assertFalse($code->$question());
                }
            }
        }
        foreach (RangedWeaponCode::getCrossbowCodes() as $codeValue) {
            $code = RangedWeaponCode::getIt($codeValue);
            self::assertTrue($code->isRangedWeapon());
            self::assertFalse($code->isMeleeArmament());
            self::assertTrue($code->isCrossbow());
            foreach ($questions as $question) {
                if ($question !== 'isCrossbow') {
                    self::assertFalse($code->$question());
                }
            }
        }
        foreach (RangedWeaponCode::getDartCodes() as $codeValue) {
            $code = RangedWeaponCode::getIt($codeValue);
            self::assertTrue($code->isRangedWeapon());
            self::assertFalse($code->isMeleeArmament());
            self::assertTrue($code->isDart());
            foreach ($questions as $question) {
                if ($question !== 'isDart') {
                    self::assertFalse($code->$question());
                }
            }
        }
        foreach (RangedWeaponCode::getThrowingWeaponCodes() as $codeValue) {
            $code = RangedWeaponCode::getIt($codeValue);
            self::assertTrue($code->isRangedWeapon());
            if ($codeValue !== RangedWeaponCode::SPEAR) {
                self::assertFalse($code->isMeleeArmament());
            } else {
                self::assertTrue($code->isMeleeArmament());
            }
            foreach ($questions as $question) {
                if ($question !== 'isThrowingWeapon') {
                    if ($question !== 'isStaffOrSpear' || $codeValue !== RangedWeaponCode::SPEAR) {
                        self::assertFalse($code->$question());
                    } else {
                        self::assertTrue($code->$question(), "{$codeValue} should be {$question}");
                    }
                }
            }
        }
        foreach (RangedWeaponCode::getSlingStoneCodes() as $codeValue) {
            $code = RangedWeaponCode::getIt($codeValue);
            self::assertTrue($code->isRangedWeapon());
            self::assertFalse($code->isMeleeArmament());
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
        $rangeSpear = RangedWeaponCode::getIt(RangedWeaponCode::SPEAR);
        self::assertInstanceOf(RangedWeaponCode::class, $rangeSpear);
        self::assertSame($rangeSpear, $rangeSpear->convertToRangedWeaponCodeEquivalent());
        $meleeSpear = $rangeSpear->convertToMeleeWeaponCodeEquivalent();
        self::assertNotSame($rangeSpear, $meleeSpear);
        self::assertInstanceOf(MeleeWeaponCode::class, $meleeSpear);
        self::assertSame(MeleeWeaponCode::getIt(MeleeWeaponCode::SPEAR), $meleeSpear);
    }

    /**
     * @test
     * @expectedException \DrdPlus\Codes\Armaments\Exceptions\CanNotBeConvertedToMeleeWeaponCode
     * @expectedExceptionMessageRegExp ~minicrossbow~
     */
    public function I_can_not_convert_anything_to_melee_weapon_code()
    {
        $rangeWeapon = RangedWeaponCode::getIt(RangedWeaponCode::MINICROSSBOW);
        self::assertFalse($rangeWeapon->isMeleeArmament());
        $rangeWeapon->convertToMeleeWeaponCodeEquivalent();
    }

    /**
     * @test
     * @dataProvider provideCodeAndUsage
     * @param $rangeWeaponCodeValue
     * @param bool $isThrowing
     * @param bool $isShooting
     * @param bool $isProjectile
     */
    public function I_can_distinguish_throwing_and_shooting_weapon_and_projectile(
        $rangeWeaponCodeValue,
        $isThrowing,
        $isShooting,
        $isProjectile
    )
    {
        $rangeWeaponCode = RangedWeaponCode::getIt($rangeWeaponCodeValue);
        self::assertSame($isThrowing, $rangeWeaponCode->isThrowingWeapon());
        self::assertSame($isShooting, $rangeWeaponCode->isShootingWeapon());
        self::assertSame($isProjectile, $rangeWeaponCode->isProjectile());
        if ($rangeWeaponCode->getValue() !== RangedWeaponCode::SPEAR) {
            self::assertFalse($rangeWeaponCode->isMeleeArmament());
        } else {
            self::assertTrue($rangeWeaponCode->isMeleeArmament());
        }
    }

    public function provideCodeAndUsage()
    {
        return [
            // bows
            ['short_bow', false, true, false],
            ['long_bow', false, true, false],
            ['short_composite_bow', false, true, false],
            ['long_composite_bow', false, true, false],
            ['power_bow', false, true, false],
            // arrows
            ['basic_arrow', false, false, true],
            ['long_range_arrow', false, false, true],
            ['war_arrow', false, false, true],
            ['piercing_arrow', false, false, true],
            ['hollow_arrow', false, false, true],
            ['crippling_arrow', false, false, true],
            ['incendiary_arrow', false, false, true],
            ['silver_arrow', false, false, true],
            // crossbows
            ['minicrossbow', false, true, false],
            ['light_crossbow', false, true, false],
            ['military_crossbow', false, true, false],
            ['heavy_crossbow', false, true, false],
            // darts
            ['basic_dart', false, false, true],
            ['war_dart', false, false, true],
            ['piercing_dart', false, false, true],
            ['hollow_dart', false, false, true],
            ['silver_dart', false, false, true],
            // throwing weapons
            ['rock', true, false, false],
            ['throwing_dagger', true, false, false],
            ['light_throwing_axe', true, false, false],
            ['war_throwing_axe', true, false, false],
            ['throwing_hammer', true, false, false],
            ['shuriken', true, false, false],
            ['spear', true, false, false],
            ['javelin', true, false, false],
            ['sling', true, false, false],
            // throwing but projectile
            ['sling_stone_light', false, false, true],
            ['sling_stone_heavier', false, false, true],
        ];
    }

}