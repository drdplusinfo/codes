<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\ShootingWeaponCode;

class ShootingWeaponCodeTest extends WeaponCodeTest
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
            ShootingWeaponCode::getBowCodes()
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
            ShootingWeaponCode::getArrowCodes()
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
            ShootingWeaponCode::getCrossbowCodes()
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
            ShootingWeaponCode::getDartCodes()
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
            ShootingWeaponCode::getThrowingWeaponCodes()
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
            ShootingWeaponCode::getSlingStoneCodes()
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
            ShootingWeaponCode::getShootingWeaponCodes(),
            'There are ' . (
            count($missingOrDifferent = array_diff_assoc($expectedValues, ShootingWeaponCode::getShootingWeaponCodes())) > 0
                ? 'missing values or different keys in given: ' . var_export($missingOrDifferent, true)
                : 'superfluous values or different keys in given: ' . var_export(array_diff_assoc(ShootingWeaponCode::getShootingWeaponCodes(), $expectedValues), true)
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
        foreach (ShootingWeaponCode::getBowCodes() as $codeValue) {
            $code = ShootingWeaponCode::getIt($codeValue);
            self::assertTrue($code->isShootingWeapon());
            self::assertFalse($code->isMeleeWeapon());
            self::assertTrue($code->isBow());
            foreach ($questions as $question) {
                if ($question !== 'isBow') {
                    self::assertFalse($code->$question());
                }
            }
        }
        foreach (ShootingWeaponCode::getArrowCodes() as $codeValue) {
            $code = ShootingWeaponCode::getIt($codeValue);
            self::assertTrue($code->isShootingWeapon());
            self::assertFalse($code->isMeleeWeapon());
            self::assertTrue($code->isArrow());
            foreach ($questions as $question) {
                if ($question !== 'isArrow') {
                    self::assertFalse($code->$question());
                }
            }
        }
        foreach (ShootingWeaponCode::getCrossbowCodes() as $codeValue) {
            $code = ShootingWeaponCode::getIt($codeValue);
            self::assertTrue($code->isShootingWeapon());
            self::assertFalse($code->isMeleeWeapon());
            self::assertTrue($code->isCrossbow());
            foreach ($questions as $question) {
                if ($question !== 'isCrossbow') {
                    self::assertFalse($code->$question());
                }
            }
        }
        foreach (ShootingWeaponCode::getDartCodes() as $codeValue) {
            $code = ShootingWeaponCode::getIt($codeValue);
            self::assertTrue($code->isShootingWeapon());
            self::assertFalse($code->isMeleeWeapon());
            self::assertTrue($code->isDart());
            foreach ($questions as $question) {
                if ($question !== 'isDart') {
                    self::assertFalse($code->$question());
                }
            }
        }
        foreach (ShootingWeaponCode::getThrowingWeaponCodes() as $codeValue) {
            $code = ShootingWeaponCode::getIt($codeValue);
            self::assertTrue($code->isShootingWeapon());
            self::assertFalse($code->isMeleeWeapon());
            self::assertTrue($code->isThrowingWeapon());
            foreach ($questions as $question) {
                if ($question !== 'isThrowingWeapon') {
                    if ($question !== 'isStaffOrSpear' || $codeValue !== ShootingWeaponCode::SPEAR) {
                        self::assertFalse($code->$question());
                    } else {
                        self::assertTrue($code->$question(), "{$codeValue} should be {$question}");
                    }
                }
            }
        }
        foreach (ShootingWeaponCode::getSlingStoneCodes() as $codeValue) {
            $code = ShootingWeaponCode::getIt($codeValue);
            self::assertTrue($code->isShootingWeapon());
            self::assertFalse($code->isMeleeWeapon());
            self::assertTrue($code->isSlingStone());
            foreach ($questions as $question) {
                if ($question !== 'isSlingStone') {
                    self::assertFalse($code->$question());
                }
            }
        }
    }

}