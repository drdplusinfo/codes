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

    /**
     * @test
     */
    public function I_can_get_physical_skill_codes_at_once()
    {
        $this->assertEquals(
            [
                SkillCodes::ARMOR_WEARING,
                SkillCodes::ATHLETICS,
                SkillCodes::BLACKSMITHING,
                SkillCodes::BOAT_DRIVING,
                SkillCodes::CART_DRIVING,
                SkillCodes::CITY_MOVING,
                SkillCodes::CLIMBING_AND_HILLWALKING,
                SkillCodes::FAST_MARSH,
                SkillCodes::FIGHT_WITH_WEAPON,
                SkillCodes::FLYING,
                SkillCodes::FOREST_MOVING,
                SkillCodes::MOVING_IN_MOUNTAINS,
                SkillCodes::RIDING,
                SkillCodes::SAILING,
                SkillCodes::SHIELD_USAGE,
                SkillCodes::SWIMMING
            ],
            SkillCodes::getPhysicalSkillCodes()
        );
        $this->assertEquals(
            [
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
    }

    /**
     * @test
     */
    public function I_can_get_psychical_skill_codes_at_once()
    {
        $this->assertEquals(
            [
                SkillCodes::ASTRONOMY,
                SkillCodes::BOTANY,
                SkillCodes::ETIQUETTE_OF_UNDERWORLD,
                SkillCodes::FOREIGN_LANGUAGE,
                SkillCodes::GEOGRAPHY_OF_A_COUNTRY,
                SkillCodes::HANDLING_OF_MAGICAL_ITEMS,
                SkillCodes::HISTORIOGRAPHY,
                SkillCodes::KNOWLEDGE_OF_A_CITY,
                SkillCodes::KNOWLEDGE_OF_WORLD,
                SkillCodes::MAPS_DRAWING,
                SkillCodes::MYTHOLOGY,
                SkillCodes::READING_AND_WRITING,
                SkillCodes::SOCIAL_ETIQUETTE,
                SkillCodes::TECHNOLOGY,
                SkillCodes::THEOLOGY,
                SkillCodes::ZOOLOGY
            ],
            SkillCodes::getPsychicalSkillCodes()
        );
        $this->assertEquals(
            [
                'astronomy',
                'botany',
                'etiquette_of_underworld',
                'foreign_language',
                'geography_of_a_country',
                'handling_of_magical_items',
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
    }

    /**
     * @test
     */
    public function I_can_get_combined_skill_codes()
    {
        $this->assertEquals(
            [
                SkillCodes::BIG_HANDWORK,
                SkillCodes::COOKING,
                SkillCodes::DANCING,
                SkillCodes::DUSK_SIGHT,
                SkillCodes::FIGHT_WITH_SHOOTING_WEAPONS,
                SkillCodes::FIRST_AID,
                SkillCodes::GAMBLING,
                SkillCodes::HANDING_WITH_ANIMALS,
                SkillCodes::HANDWORK,
                SkillCodes::HERBALISM,
                SkillCodes::HUNTING_AND_FISHING,
                SkillCodes::KNOTTING,
                SkillCodes::PAINTING,
                SkillCodes::PEDAGOGY,
                SkillCodes::PLAYING_ON_MUSIC_INSTRUMENT,
                SkillCodes::SEDUCTION,
                SkillCodes::SHOWMANSHIP,
                SkillCodes::SINGING,
                SkillCodes::STATUARY
            ],
            SkillCodes::getCombinedSkillCodes()
        );
        $this->assertEquals(
            [
                'big_handwork',
                'cooking',
                'dancing',
                'dusk_sight',
                'fight_with_shooting_weapons',
                'first_aid',
                'gambling',
                'handing_with_animals',
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
    }
}
