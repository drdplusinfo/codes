<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\SkillTypeCode;

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