<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\WeaponCode;

abstract class WeaponCodeTest extends ArmamentCodeTest
{
    /**
     * @test
     */
    public function It_is_weapon_code()
    {
        self::assertTrue(is_a($this->getSutClass(), WeaponCode::class, true));
    }
}