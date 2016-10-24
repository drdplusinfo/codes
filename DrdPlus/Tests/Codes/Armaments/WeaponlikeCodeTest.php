<?php
namespace DrdPlus\Tests\Codes\Armaments;

use DrdPlus\Codes\Armaments\WeaponlikeCode;

abstract class WeaponlikeCodeTest extends ArmamentCodeTest
{
    /**
     * @test
     */
    public function It_is_weaponlike_code()
    {
        $sutClass = $this->getSutClass();
        $reflection = new \ReflectionClass($sutClass);
        /** @var WeaponlikeCode $sut */
        $sut = $reflection->newInstanceWithoutConstructor();
        self::assertInstanceOf(WeaponlikeCode::class, $sut);
        self::assertTrue($sut->isWeaponlike());
    }

    /**
     * @test
     */
    abstract public function I_can_easily_find_out_if_is_weapon();

    /**
     * @test
     */
    abstract public function I_can_easily_find_out_if_is_ranged();

    /**
     * @test
     */
    abstract public function I_can_easily_find_out_if_is_shield();

    /**
     * @test
     */
    abstract public function I_can_easily_find_out_if_is_melee();

    /**
     * @test
     */
    abstract public function I_can_easily_find_out_it_is_not_projectile();

    /**
     * @test
     */
    abstract public function I_can_easily_find_out_if_weapon_is_unarmed_in_fact();
}