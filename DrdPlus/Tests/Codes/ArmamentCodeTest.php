<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\ArmamentCode;

abstract class ArmamentCodeTest extends AbstractCodeTest
{
    /**
     * @test
     */
    public function It_is_armament_code()
    {
        self::assertTrue(is_a($this->getSutClass(), ArmamentCode::class, true));
    }
}
