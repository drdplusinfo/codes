<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\SkillCodes;

class SkillCodesTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function I_can_get_all_types_at_once()
    {
        $this->assertEquals(
            ['physical', 'psychical', 'combined'],
            SkillCodes::getSkillTypes()
        );
        $this->assertEquals(
            [SkillCodes::PHYSICAL, SkillCodes::PSYCHICAL, SkillCodes::COMBINED],
            SkillCodes::getSkillTypes()
        );
    }
}
