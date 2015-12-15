<?php
namespace DrdPlus\Codes;

class SkillCodes
{
    // types
    const PHYSICAL = 'physical';
    const PSYCHICAL = 'psychical';
    const COMBINED = 'combined';

    /**
     * @return array|string[]
     */
    public static function getSkillTypes()
    {
        return [self::PHYSICAL, self::PSYCHICAL, self::COMBINED];
    }

    // PHYSICAL
    const ARMOR_WEARING = 'armor_wearing';
    const ATHLETICS = 'athletics';
    const BLACKSMITHING = 'blacksmithing';
    const BOAT_DRIVING = 'boat_driving';
    const CART_DRIVING = 'cart_driving';
    const CITY_MOVING = 'city_moving';
    const CLIMBING_AND_HILLWALKING = 'climbing_and_hillwalking';
    const FAST_MARSH = 'fast_marsh';
    const FIGHT_WITH_WEAPON = 'fight_with_weapon';
    const FLYING = 'flying';
    const FOREST_MOVING = 'forest_moving';
    const MOVING_IN_MOUNTAINS = 'moving_in_mountains';
    const RIDING = 'riding';
    const SAILING = 'sailing';
    const SHIELD_USAGE = 'shield_usage';
    const SWIMMING = 'swimming';

    public static function getPhysicalSkillCodes()
    {
        return [
            self::ARMOR_WEARING,
            self::ATHLETICS,
            self::BLACKSMITHING,
            self::BOAT_DRIVING,
            self::CART_DRIVING,
            self::CITY_MOVING,
            self::CLIMBING_AND_HILLWALKING,
            self::FAST_MARSH,
            self::FIGHT_WITH_WEAPON,
            self::FLYING,
            self::FOREST_MOVING,
            self::MOVING_IN_MOUNTAINS,
            self::RIDING,
            self::SAILING,
            self::SHIELD_USAGE,
            self::SWIMMING
        ];
    }

    // PSYCHICAL
    const ASTRONOMY = 'astronomy';
    const BOTANY = 'botany';
    const ETIQUETTE_OF_UNDERWORLD = 'etiquette_of_underworld';
    const FOREIGN_LANGUAGE = 'foreign_language';
    const GEOGRAPHY_OF_A_COUNTRY = 'geography_of_a_country';
    const HANDLING_OF_MAGICAL_ITEMS = 'handling_of_magical_items';
    const HISTORIOGRAPHY = 'historiography';
    const KNOWLEDGE_OF_A_CITY = 'knowledge_of_a_city';
    const KNOWLEDGE_OF_WORLD = 'knowledge_of_world';
    const MAPS_DRAWING = 'maps_drawing';
    const MYTHOLOGY = 'mythology';
    const READING_AND_WRITING = 'reading_and_writing';
    const SOCIAL_ETIQUETTE = 'social_etiquette';
    const TECHNOLOGY = 'technology';
    const THEOLOGY = 'theology';
    const ZOOLOGY = 'zoology';

    public static function getPsychicalSkillCodes()
    {
        return [
            self::ASTRONOMY,
            self::BOTANY,
            self::ETIQUETTE_OF_UNDERWORLD,
            self::FOREIGN_LANGUAGE,
            self::GEOGRAPHY_OF_A_COUNTRY,
            self::HANDLING_OF_MAGICAL_ITEMS,
            self::HISTORIOGRAPHY,
            self::KNOWLEDGE_OF_A_CITY,
            self::KNOWLEDGE_OF_WORLD,
            self::MAPS_DRAWING,
            self::MYTHOLOGY,
            self::READING_AND_WRITING,
            self::SOCIAL_ETIQUETTE,
            self::TECHNOLOGY,
            self::THEOLOGY,
            self::ZOOLOGY
        ];
    }

    // COMBINED
    const BIG_HANDWORK = 'big_handwork';
    const COOKING = 'cooking';
    const DANCING = 'dancing';
    const DUSK_SIGHT = 'dusk_sight';
    const FIGHT_WITH_SHOOTING_WEAPONS = 'fight_with_shooting_weapons';
    const FIRST_AID = 'first_aid';
    const GAMBLING = 'gambling';
    const HANDING_WITH_ANIMALS = 'handing_with_animals';
    const HANDWORK = 'handwork';
    const HERBALISM = 'herbalism';
    const HUNTING_AND_FISHING = 'hunting_and_fishing';
    const KNOTTING = 'knotting';
    const PAINTING = 'painting';
    const PEDAGOGY = 'pedagogy';
    const PLAYING_ON_MUSIC_INSTRUMENT = 'playing_on_music_instrument';
    const SEDUCTION = 'seduction';
    const SHOWMANSHIP = 'showmanship';
    const SINGING = 'singing';
    const STATUARY = 'statuary';

    public static function getCombinedSkillCodes()
    {
        return [
            self::BIG_HANDWORK,
            self::COOKING,
            self::DANCING,
            self::DUSK_SIGHT,
            self::FIGHT_WITH_SHOOTING_WEAPONS,
            self::FIRST_AID,
            self::GAMBLING,
            self::HANDING_WITH_ANIMALS,
            self::HANDWORK,
            self::HERBALISM,
            self::HUNTING_AND_FISHING,
            self::KNOTTING,
            self::PAINTING,
            self::PEDAGOGY,
            self::PLAYING_ON_MUSIC_INSTRUMENT,
            self::SEDUCTION,
            self::SHOWMANSHIP,
            self::SINGING,
            self::STATUARY
        ];
    }

}
