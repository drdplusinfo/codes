<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\MeleeWeaponlikeCode;

abstract class MeleeWeaponlikeCodeTest extends WeaponlikeCodeTest
{
    /**
     * @test
     */
    public function It_is_melee_armament_code()
    {
        self::assertTrue(is_a($this->getSutClass(), MeleeWeaponlikeCode::class, true));
        $reflection = new \ReflectionClass($this->getSutClass());
        /** @var MeleeWeaponlikeCode $meleeArmamentCode */
        $meleeArmamentCode = $reflection->newInstanceWithoutConstructor();
        self::assertTrue($meleeArmamentCode->isMeleeArmament());
    }

    /**
     * @test
     */
    public function It_is_not_range_nor_shooting_nor_throwing_weapon_nor_projectile_code()
    {
        $reflection = new \ReflectionClass($this->getSutClass());
        /** @var MeleeWeaponlikeCode $meleeArmamentCode */
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