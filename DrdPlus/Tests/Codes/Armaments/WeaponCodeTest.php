<?php
namespace DrdPlus\Tests\Codes\Armaments;

use DrdPlus\Codes\Armaments\WeaponCode;

abstract class WeaponCodeTest extends WeaponlikeCodeTest
{
    /**
     * @test
     */
    public function It_is_weapon_code()
    {
        /** @var WeaponCode $sut */
        $sut = $this->getSut();
        self::assertInstanceOf(WeaponCode::class, $sut);
        self::assertFalse($sut->isShield());
        self::assertFalse($sut->isProtectiveArmament());
    }

    /**
     * @test
     */
    public function I_can_easily_find_out_if_is_weapon()
    {
        /** @var WeaponCode $sut */
        $sut = $this->getSut();
        self::assertTrue($sut->isWeapon());
    }

    /**
     * @test
     */
    public function I_can_easily_find_out_if_is_shield()
    {
        /** @var WeaponCode $sut */
        $sut = $this->getSut();
        self::assertFalse($sut->isShield());
    }

    /**
     * @test
     */
    public function I_can_easily_find_out_it_is_not_projectile()
    {
        /** @var WeaponCode $sut */
        $sut = $this->getSut();
        self::assertFalse($sut->isProjectile());
    }

}