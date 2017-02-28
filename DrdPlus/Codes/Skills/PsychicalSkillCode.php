<?php
namespace DrdPlus\Codes\Skills;

/**
 * @method static PsychicalSkillCode getIt($codeValue)
 */
class PsychicalSkillCode extends SkillCode
{

    // PSYCHICAL
    const ASTRONOMY = 'astronomy';
    const BOTANY = 'botany';
    const ETIQUETTE_OF_GANGLAND = 'etiquette_of_gangland';
    const FOREIGN_LANGUAGE = 'foreign_language';
    const GEOGRAPHY_OF_A_COUNTRY = 'geography_of_a_country';
    const HANDLING_WITH_MAGICAL_ITEMS = 'handling_with_magical_items';
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

    /**
     * @return array|string[]
     */
    public static function getPossibleValues()
    {
        return [
            self::ASTRONOMY,
            self::BOTANY,
            self::ETIQUETTE_OF_GANGLAND,
            self::FOREIGN_LANGUAGE,
            self::GEOGRAPHY_OF_A_COUNTRY,
            self::HANDLING_WITH_MAGICAL_ITEMS,
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

}