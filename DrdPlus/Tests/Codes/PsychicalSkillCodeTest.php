<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\PsychicalSkillCode;

class PsychicalSkillCodeTest extends SkillCodeTest
{
    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
    {
        self::assertEquals(
            $expectedPsychicalSkillCodes = [
                'astronomy',
                'botany',
                'etiquette_of_underworld',
                'foreign_language',
                'geography_of_a_country',
                'handling_with_magical_items',
                'historiography',
                'knowledge_of_a_city',
                'knowledge_of_world',
                'maps_drawing',
                'mythology',
                'reading_and_writing',
                'social_etiquette',
                'technology',
                'theology',
                'zoology'
            ],
            PsychicalSkillCode::getPsychicalSkillCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedPsychicalSkillCodes);
    }

}