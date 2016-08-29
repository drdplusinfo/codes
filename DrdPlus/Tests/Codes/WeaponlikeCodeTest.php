<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\WeaponlikeCode;

abstract class WeaponlikeCodeTest extends ArmamentCodeTest
{
    /**
     * @test
     */
    public function It_is_weapon_code()
    {
        self::assertTrue(is_a($this->getSutClass(), WeaponlikeCode::class, true));
    }
}