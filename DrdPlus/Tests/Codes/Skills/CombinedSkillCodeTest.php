<?php
namespace DrdPlus\Tests\Codes\Skills;

use DrdPlus\Codes\Skills\CombinedSkillCode;

class CombinedSkillCodeTest extends SkillCodeTest
{
    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
    {
        self::assertEquals(
            $expectedCombinedSkillCodes = [
                'big_handwork',
                'cooking',
                'dancing',
                'dusk_sight',
                'fight_with_bows',
                'fight_with_crossbows',
                'first_aid',
                'gambling',
                'handling_with_animals',
                'handwork',
                'herbalism',
                'hunting_and_fishing',
                'knotting',
                'painting',
                'pedagogy',
                'playing_on_music_instrument',
                'seduction',
                'showmanship',
                'singing',
                'statuary'
            ],
            CombinedSkillCode::getCombinedSkillCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCombinedSkillCodes);

    }

}