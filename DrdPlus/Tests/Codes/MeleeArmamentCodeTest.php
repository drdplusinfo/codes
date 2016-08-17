<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\MeleeArmamentCode;

abstract class MeleeArmamentCodeTest extends WeaponCodeTest
{
    /**
     * @test
     */
    public function It_is_melee_armament_code()
    {
        self::assertTrue(is_a($this->getSutClass(), MeleeArmamentCode::class, true));
        $reflection = new \ReflectionClass($this->getSutClass());
        /** @var MeleeArmamentCode $meleeArmamentCode */
        $meleeArmamentCode = $reflection->newInstanceWithoutConstructor();
        self::assertTrue($meleeArmamentCode->isMeleeArmament());
    }

    /**
     * @test
     */
    public function It_is_not_range_nor_shooting_nor_throwing_weapon_nor_projectile_code()
    {
        $reflection = new \ReflectionClass($this->getSutClass());
        /** @var MeleeArmamentCode $meleeArmamentCode */
        $meleeArmamentCode = $reflection->newInstanceWithoutConstructor();
        self::assertFalse($meleeArmamentCode->isRangeWeapon());
        self::assertFalse($meleeArmamentCode->isShootingWeapon());
        self::assertFalse($meleeArmamentCode->isThrowingWeapon());
        self::assertFalse($meleeArmamentCode->isProjectile());
    }

    /**
     * @test
     */
    abstract public function I_can_easily_find_out_if_is_shield();

    /**
     * @test
     */
    abstract public function I_can_easily_find_out_if_is_melee_weapon();

}