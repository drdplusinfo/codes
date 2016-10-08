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
        $sutClass = $this->getSutClass();
        $reflection = new \ReflectionClass($sutClass);
        /** @var WeaponCode $sut */
        $sut = $reflection->newInstanceWithoutConstructor();
        self::assertInstanceOf(WeaponCode::class, $sut);
        self::assertFalse($sut->isShield());
        self::assertFalse($sut->isProtectiveArmament());
    }

    /**
     * @test
     */
    public function I_can_easily_find_out_if_is_weapon()
    {
        $reflection = new \ReflectionClass($this->getSutClass());
        /** @var WeaponCode $sut */
        $sut = $reflection->newInstanceWithoutConstructor();
        self::assertTrue($sut->isWeapon());
    }

    /**
     * @test
     */
    public function I_can_easily_find_out_if_is_shield()
    {
        $reflection = new \ReflectionClass($this->getSutClass());
        /** @var WeaponCode $sut */
        $sut = $reflection->newInstanceWithoutConstructor();
        self::assertFalse($sut->isShield());
    }

}