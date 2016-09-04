<?php
namespace DrdPlus\Tests\Codes\Armaments;

use DrdPlus\Codes\Armaments\ProtectiveArmamentCode;
use DrdPlus\Codes\Armaments\ShieldCode;

class ShieldCodeTest extends WeaponlikeCodeTest implements ProtectiveArmamentCodeTest
{
    use MeleeWeaponlikeCodeTrait;

    /**
     * @test
     */
    public function I_can_easily_find_out_if_is_protective_armament()
    {
        $reflection = new \ReflectionClass($this->getSutClass());
        /** @var ShieldCode $sut */
        $sut = $reflection->newInstanceWithoutConstructor();
        self::assertTrue($sut->isProtectiveArmament());
        self::assertInstanceOf(ProtectiveArmamentCode::class, $sut);
    }

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
                'pavise',
            ],
            ShieldCode::getShieldCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }

    /**
     * @test
     */
    public function I_can_easily_find_out_if_is_melee_armament()
    {
        $reflection = new \ReflectionClass($this->getSutClass());
        /** @var ShieldCode $sut */
        $sut = $reflection->newInstanceWithoutConstructor();
        self::assertTrue($sut->isMeleeArmament());
    }

    /**
     * @test
     */
    public function I_can_easily_find_out_if_is_shield()
    {
        self::assertTrue(ShieldCode::getIt(ShieldCode::BUCKLER)->isShield());
        self::assertFalse(ShieldCode::getIt(ShieldCode::BUCKLER)->isArmor());
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
     * @expectedException \DrdPlus\Codes\Armaments\Exceptions\CanNotBeConvertedToMeleeWeaponCode
     */
    public function I_can_not_convert_it_to_melee_weapon_code()
    {
        ShieldCode::getIt(ShieldCode::BUCKLER)->convertToMeleeWeaponCodeEquivalent();
    }

    /**
     * @test
     * @expectedException \DrdPlus\Codes\Armaments\Exceptions\CanNotBeConvertedToRangeWeaponCode
     */
    public function I_can_not_convert_it_to_range_weapon_code()
    {
        ShieldCode::getIt(ShieldCode::BUCKLER)->convertToRangedWeaponCodeEquivalent();
    }

    /**
     * @test
     */
    public function I_can_ask_it_if_is_without_shield()
    {
        self::assertTrue(ShieldCode::getIt(ShieldCode::WITHOUT_SHIELD)->isWithoutShield());
        self::assertFalse(ShieldCode::getIt(ShieldCode::HEAVY_SHIELD)->isWithoutShield());
    }

}