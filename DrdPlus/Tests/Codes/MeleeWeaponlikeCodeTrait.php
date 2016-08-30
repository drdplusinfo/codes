<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\MeleeWeaponlikeCode;
use DrdPlus\Codes\WeaponlikeCode;

trait MeleeWeaponlikeCodeTrait
{
    /**
     * @test
     */
    public function It_is_melee_weaponlike_code()
    {
        $reflection = new \ReflectionClass($this->getSutClass());
        $meleeWeaponlikeCode = $reflection->newInstanceWithoutConstructor();
        self::assertInstanceOf(MeleeWeaponlikeCode::class, $meleeWeaponlikeCode);
    }

    /**
     * @test
     */
    public function It_is_not_range_nor_shooting_nor_throwing_weapon_nor_projectile_code()
    {
        $reflection = new \ReflectionClass($this->getSutClass());
        /** @var WeaponlikeCode $meleeWeaponlikeCode */
        $meleeWeaponlikeCode = $reflection->newInstanceWithoutConstructor();
        self::assertFalse($meleeWeaponlikeCode->isRangeWeapon());
        self::assertFalse($meleeWeaponlikeCode->isShootingWeapon());
        self::assertFalse($meleeWeaponlikeCode->isThrowingWeapon());
        self::assertFalse($meleeWeaponlikeCode->isProjectile());
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