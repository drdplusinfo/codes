<?php
namespace DrdPlus\Tests\Codes\Skills;

use DrdPlus\Codes\Skills\SkillTypeCode;

class SkillTypeCodeTest extends SkillCodeTest
{
    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
    {
        self::assertEquals(
            ['physical', 'psychical', 'combined'],
            SkillTypeCode::getSkillTypeCodes()
        );
    }
}