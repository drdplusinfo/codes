<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\Code;

abstract class SkillCodeTest extends AbstractCodeTest
{
    /**
     * @test
     */
    public function I_can_use_it_as_a_generic_code()
    {
        self::assertTrue(is_a($this->getSutClass(), Code::class, true), 'Should be child of ' . Code::class);
    }
}
