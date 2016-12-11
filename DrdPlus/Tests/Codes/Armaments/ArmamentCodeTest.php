<?php
namespace DrdPlus\Tests\Codes\Armaments;

use DrdPlus\Codes\Armaments\ArmamentCode;
use DrdPlus\Codes\Code;
use DrdPlus\Tests\Codes\AbstractCodeTest;

abstract class ArmamentCodeTest extends AbstractCodeTest
{
    /**
     * @test
     */
    public function Even_armament_code_itself_is_code()
    {
        self::assertTrue(is_a(ArmamentCode::class, Code::class, true));
    }

    /**
     * @test
     */
    public function It_is_armament_code()
    {
        self::assertTrue(is_a(self::getSutClass(), ArmamentCode::class, true));
    }
}