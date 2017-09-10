<?php
namespace DrdPlus\Tests\Codes\Armaments;

use DrdPlus\Codes\Armaments\Exceptions\CanNotBeConvertedToMeleeWeaponCode;
use DrdPlus\Codes\Armaments\MeleeWeaponCode;
use DrdPlus\Codes\Armaments\RangedWeaponCode;
use DrdPlus\Codes\Armaments\WeaponCategoryCode;
use DrdPlus\Codes\Partials\Exceptions\UnknownValueForCode;

class RangedWeaponCodeTest extends WeaponCodeTest
{

    /**
     * @param string $weaponlikeCode
     * @param string $interferingCodeClass
     * @return bool
     */
    protected function isSameCodeAllowedFor(string $weaponlikeCode, string $interferingCodeClass): bool
    {
        try {
            return is_a(RangedWeaponCode::getIt($weaponlikeCode)->convertToMeleeWeaponCodeEquivalent(), $interferingCodeClass);
        } catch (CanNotBeConvertedToMeleeWeaponCode $canNotBeConvertedToMeleeWeaponCode) {
            return false;
        } catch (UnknownValueForCode $unknownValueForCode) {
            return false;
        }
    }

    /**
     * @test
     */
    public function I_can_easily_find_out_if_is_melee()
    {
        $reflection = new \ReflectionClass(self::getSutClass());
        /** @var RangedWeaponCode $sut */
        $sut = $reflection->newInstanceWithoutConstructor();
        self::assertFalse($sut->isMelee());
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
            RangedWeaponCode::getBowValues()
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
            RangedWeaponCode::getCrossbowValues()
        );
    }

    /**
     * @test
     */
    public function I_can_get_throwing_weapon_codes()
    {
        self::assertSame(
            [
                'sand',
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
            RangedWeaponCode::getThrowingWeaponValues()
        );
    }

    /**
     * @test
     */
    public function I_can_get_all_codes_at_once_or_by_same_named_constant()
    {
        self::assertSame(
            $expectedValues = [
                // bows
                'short_bow',
                'long_bow',
                'short_composite_bow',
                'long_composite_bow',
                'power_bow',
                // crossbows
                'minicrossbow',
                'light_crossbow',
                'military_crossbow',
                'heavy_crossbow',
                // throwing weapons
                'sand',
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
            RangedWeaponCode::getPossibleValues(),
            'There are ' . (
            count($missingOrDifferent = array_diff_assoc($expectedValues, RangedWeaponCode::getPossibleValues())) > 0
                ? 'missing values or different keys in given: ' . var_export($missingOrDifferent, true)
                : 'superfluous values or different keys in given: ' . var_export(array_diff_assoc(RangedWeaponCode::getPossibleValues(), $expectedValues), true)
            )
        );
    }

    /**
     * @test
     */
    public function I_can_ask_code_if_is_specific_weapon_type()
    {
        $questions = [
            'isBow', 'isCrossbow', 'isThrowingWeapon',
        ];
        foreach (RangedWeaponCode::getBowValues() as $codeValue) {
            $code = RangedWeaponCode::getIt($codeValue);
            self::assertTrue($code->isRanged());
            self::assertFalse($code->isMelee());
            self::assertTrue($code->isBow());
            foreach ($questions as $question) {
                if ($question !== 'isBow') {
                    self::assertFalse($code->$question());
                }
            }
        }
        foreach (RangedWeaponCode::getCrossbowValues() as $codeValue) {
            $code = RangedWeaponCode::getIt($codeValue);
            self::assertTrue($code->isRanged());
            self::assertFalse($code->isMelee());
            self::assertTrue($code->isCrossbow());
            foreach ($questions as $question) {
                if ($question !== 'isCrossbow') {
                    self::assertFalse($code->$question());
                }
            }
        }
        foreach (RangedWeaponCode::getThrowingWeaponValues() as $codeValue) {
            $code = RangedWeaponCode::getIt($codeValue);
            self::assertTrue($code->isRanged());
            if ($codeValue !== RangedWeaponCode::SPEAR) {
                self::assertFalse($code->isMelee());
            } else {
                self::assertTrue($code->isMelee());
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
        self::assertFalse($rangeWeapon->isMelee());
        $rangeWeapon->convertToMeleeWeaponCodeEquivalent();
    }

    /**
     * @test
     * @dataProvider provideCodeAndUsage
     * @param $rangeWeaponCodeValue
     * @param bool $isThrowing
     * @param bool $isShooting
     */
    public function I_can_distinguish_throwing_and_shooting_weapon(
        $rangeWeaponCodeValue,
        $isThrowing,
        $isShooting
    )
    {
        $rangeWeaponCode = RangedWeaponCode::getIt($rangeWeaponCodeValue);
        self::assertFalse($rangeWeaponCode->isProjectile());
        self::assertSame($isThrowing, $rangeWeaponCode->isThrowingWeapon());
        self::assertSame($isShooting, $rangeWeaponCode->isShootingWeapon());
        if ($rangeWeaponCode->getValue() !== RangedWeaponCode::SPEAR) {
            self::assertFalse($rangeWeaponCode->isMelee());
        } else {
            self::assertTrue($rangeWeaponCode->isMelee());
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
            ['minicrossbow', false, true, false],
            ['light_crossbow', false, true, false],
            ['military_crossbow', false, true, false],
            ['heavy_crossbow', false, true, false],
            ['sand', true, false, false],
            ['rock', true, false, false],
            ['throwing_dagger', true, false, false],
            ['light_throwing_axe', true, false, false],
            ['war_throwing_axe', true, false, false],
            ['throwing_hammer', true, false, false],
            ['shuriken', true, false, false],
            ['spear', true, false, false],
            ['javelin', true, false, false],
            ['sling', true, false, false],
        ];
    }

    /**
     * @test
     */
    public function I_can_easily_find_out_if_weapon_is_unarmed_in_fact()
    {
        self::assertFalse(RangedWeaponCode::getIt(RangedWeaponCode::LONG_COMPOSITE_BOW)->isUnarmed());
    }

    /**
     * @test
     */
    public function I_can_easily_find_out_if_is_ranged()
    {
        self::assertTrue(RangedWeaponCode::getIt(RangedWeaponCode::MILITARY_CROSSBOW)->isRanged());
    }

    protected function getRandomWeaponCategoryCode(): WeaponCategoryCode
    {
        return WeaponCategoryCode::getIt(
            WeaponCategoryCode::getRangedWeaponCategoryValues()[array_rand(WeaponCategoryCode::getRangedWeaponCategoryValues())]
        );
    }
}