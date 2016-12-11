<?php
namespace DrdPlus\Tests\Codes\Skills;

use DrdPlus\Codes\Code;
use DrdPlus\Tests\Codes\AbstractCodeTest;

abstract class SkillCodeTest extends AbstractCodeTest
{
    /**
     * @test
     */
    public function I_can_use_it_as_a_generic_code()
    {
        self::assertTrue(is_a(self::getSutClass(), Code::class, true), 'Should be child of ' . Code::class);
    }
}
