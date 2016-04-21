<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\SkillCodes;

class SkillCodesTest extends AbstractCodesTableTest
{
    /**
     * @test
     */
    public function I_can_get_all_skill_codes()
    {
        self::assertEquals(
            $expectedCodes = ['physical', 'psychical', 'combined'],
            SkillCodes::getSkillTypes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }

    /**
     * @test
     */
    public function I_can_get_physical_skill_codes()
    {
        self::assertEquals(
            $expectedCodes = [
                'armor_wearing',
                'athletics',
                'blacksmithing',
                'boat_driving',
                'cart_driving',
                'city_moving',
                'climbing_and_hillwalking',
                'fast_marsh',
                'fight_with_weapon',
                'flying',
                'forest_moving',
                'moving_in_mountains',
                'riding',
                'sailing',
                'shield_usage',
                'swimming'
            ],
            SkillCodes::getPhysicalSkillCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }

    /**
     * @test
     */
    public function I_can_get_psychical_skill_codes()
    {
        self::assertEquals(
            $expectedCodes = [
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
            SkillCodes::getPsychicalSkillCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }

    /**
     * @test
     */
    public function I_can_get_combined_skill_codes()
    {
        self::assertEquals(
            $expectedCodes = [
                'big_handwork',
                'cooking',
                'dancing',
                'dusk_sight',
                'fight_with_shooting_weapons',
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
            SkillCodes::getCombinedSkillCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }
}
