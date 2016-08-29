<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\ShieldCode;

class ShieldCodeTest extends MeleeWeaponlikeCodeTest
{
    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
    {
        self::assertSame(
            $expectedCodes = [
                'without_shield',
                'buckler',
                'small_shield',
                'medium_shield',
                'heavy_shield',
                'pavise'
            ],
            ShieldCode::getShieldCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }

    /**
     * @test
     */
    public function I_can_easily_find_out_if_is_shield()
    {
        self::assertTrue(ShieldCode::getIt(ShieldCode::BUCKLER)->isShield());
    }

    /**
     * @test
     */
    public function I_can_easily_find_out_if_is_melee_weapon()
    {
        self::assertFalse(ShieldCode::getIt(ShieldCode::BUCKLER)->isMeleeWeapon());
    }

    /**
     * @test
     * @expectedException \DrdPlus\Codes\Exceptions\CanNotBeConvertedToMeleeWeaponCode
     */
    public function I_can_not_convert_it_to_melee_weapon_code()
    {
        ShieldCode::getIt(ShieldCode::BUCKLER)->convertToMeleeWeaponCodeEquivalent();
    }

    /**
     * @test
     * @expectedException \DrdPlus\Codes\Exceptions\CanNotBeConvertedToRangeWeaponCode
     */
    public function I_can_not_convert_it_to_range_weapon_code()
    {
        ShieldCode::getIt(ShieldCode::BUCKLER)->convertToRangeWeaponCodeEquivalent();
    }

}