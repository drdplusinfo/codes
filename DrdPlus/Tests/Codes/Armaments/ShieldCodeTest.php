<?php
namespace DrdPlus\Tests\Codes\Armaments;

use DrdPlus\Codes\Armaments\ProtectiveArmamentCode;
use DrdPlus\Codes\Armaments\ShieldCode;

class ShieldCodeTest extends WeaponlikeCodeTest implements ProtectiveArmamentCodeTest
{
    use MeleeWeaponlikeCodeTrait;

    /**
     * @param string $weaponlikeCode
     * @param string $interferingCodeClass
     * @return bool
     */
    protected function isSameCodeAllowedFor($weaponlikeCode, $interferingCodeClass)
    {
        return false;
    }

    /**
     * @test
     */
    public function I_can_easily_find_out_if_is_protective_armament()
    {
        $shieldCode = ShieldCode::getIt(ShieldCode::MEDIUM_SHIELD);
        self::assertTrue($shieldCode->isProtectiveArmament());
        self::assertInstanceOf(ProtectiveArmamentCode::class, $shieldCode);
    }

    /**
     * @test
     */
    public function I_can_easily_find_out_if_is_ranged()
    {
        self::assertFalse(ShieldCode::getIt(ShieldCode::WITHOUT_SHIELD)->isRanged());
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
    public function I_can_easily_find_out_if_is_melee()
    {
        $reflection = new \ReflectionClass($this->getSutClass());
        /** @var ShieldCode $sut */
        $sut = $reflection->newInstanceWithoutConstructor();
        self::assertTrue($sut->isMelee());
    }

    /**
     * @test
     */
    public function I_can_easily_find_out_if_is_weapon()
    {
        $reflection = new \ReflectionClass($this->getSutClass());
        /** @var ShieldCode $sut */
        $sut = $reflection->newInstanceWithoutConstructor();
        self::assertFalse($sut->isWeapon());
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
    public function I_can_easily_find_out_it_is_not_projectile()
    {
        self::assertFalse(ShieldCode::getIt(ShieldCode::BUCKLER)->isProjectile());
    }

    /**
     * @test
     */
    public function I_can_easily_find_out_if_weapon_is_unarmed_in_fact()
    {
        self::assertTrue(ShieldCode::getIt(ShieldCode::WITHOUT_SHIELD)->isUnarmed());
        self::assertFalse(ShieldCode::getIt(ShieldCode::HEAVY_SHIELD)->isUnarmed());
    }

}