<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\SkillCodes;

class SkillCodesTest extends AbstractCodesTableTest
{

    private static $expectedSkillTypeCodes = ['physical', 'psychical', 'combined'];
    private static $expectedPhysicalSkillCodes = [
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
    ];
    private static $expectedPsychicalSkillCodes = [
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
    ];
    private static $expectedCombinedSkillCodes = [
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
    ];

    /**
     * @test
     */
    public function I_can_get_all_codes()
    {
        $this->I_can_get_codes_by_same_named_constants(
            array_merge(
                self::$expectedSkillTypeCodes,
                self::$expectedPhysicalSkillCodes,
                self::$expectedCombinedSkillCodes
            )
        );
    }

    /**
     * @test
     */
    public function I_can_get_skill_types()
    {
        self::assertEquals(
            self::$expectedSkillTypeCodes,
            SkillCodes::getSkillTypes()
        );
    }

    /**
     * @test
     */
    public function I_can_get_physical_skill_codes()
    {
        self::assertEquals(
            self::$expectedPhysicalSkillCodes,
            SkillCodes::getPhysicalSkillCodes()
        );
        $this->I_can_get_codes_by_same_named_constants(self::$expectedPhysicalSkillCodes);
    }

    /**
     * @test
     */
    public function I_can_get_psychical_skill_codes()
    {
        self::assertEquals(
            self::$expectedPsychicalSkillCodes,
            SkillCodes::getPsychicalSkillCodes()
        );
        $this->I_can_get_codes_by_same_named_constants(self::$expectedPsychicalSkillCodes);
    }

    /**
     * @test
     */
    public function I_can_get_combined_skill_codes()
    {
        self::assertEquals(
            self::$expectedCombinedSkillCodes,
            SkillCodes::getCombinedSkillCodes()
        );
        $this->I_can_get_codes_by_same_named_constants(self::$expectedCombinedSkillCodes);
    }

    /**
     * @test
     */
    public function I_can_get_all_skill_codes()
    {
        self::assertEquals(
            array_merge(
                self::$expectedPhysicalSkillCodes,
                self::$expectedPsychicalSkillCodes,
                self::$expectedCombinedSkillCodes
            ),
            SkillCodes::getSkillCodes()
        );
    }
}
