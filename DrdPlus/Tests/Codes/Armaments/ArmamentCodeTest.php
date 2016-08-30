<?php
namespace DrdPlus\Tests\Codes\Armaments;

use DrdPlus\Codes\Armaments\ArmamentCode;
use DrdPlus\Tests\Codes\CodeTest;

abstract class ArmamentCodeTest extends CodeTest
{
    /**
     * @test
     */
    public function It_is_armament_code()
    {
        self::assertTrue(is_a($this->getSutClass(), ArmamentCode::class, true));
    }
}
