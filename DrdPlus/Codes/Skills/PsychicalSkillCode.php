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
    public static function getPossibleValues(): array
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
            self::ZOOLOGY,
        ];
    }

    protected function fetchTranslations(): array
    {
        return [
            'en' => [
                self::ASTRONOMY => ['one' => 'astronomy'],
                self::BOTANY => ['one' => 'botany'],
                self::ETIQUETTE_OF_GANGLAND => ['one' => 'etiquette of gangland'],
                self::FOREIGN_LANGUAGE => ['one' => 'foreign language'],
                self::GEOGRAPHY_OF_A_COUNTRY => ['one' => 'geography of a country'],
                self::HANDLING_WITH_MAGICAL_ITEMS => ['one' => 'handling with magical items'],
                self::HISTORIOGRAPHY => ['one' => 'historiography'],
                self::KNOWLEDGE_OF_A_CITY => ['one' => 'knowledge of a city'],
                self::KNOWLEDGE_OF_WORLD => ['one' => 'knowledge of world'],
                self::MAPS_DRAWING => ['one' => 'maps drawing'],
                self::MYTHOLOGY => ['one' => 'mythology'],
                self::READING_AND_WRITING => ['one' => 'reading and writing'],
                self::SOCIAL_ETIQUETTE => ['one' => 'social etiquette'],
                self::TECHNOLOGY => ['one' => 'technology'],
                self::THEOLOGY => ['one' => 'theology'],
                self::ZOOLOGY => ['one' => 'zoology'],
            ],
            'cs' => [
                self::ASTRONOMY => ['one' => 'astronomie'],
                self::BOTANY => ['one' => 'botanika'],
                self::ETIQUETTE_OF_GANGLAND => ['one' => 'etiketa podstvětí'],
                self::FOREIGN_LANGUAGE => ['one' => 'cizí jazyk'],
                self::GEOGRAPHY_OF_A_COUNTRY => ['one' => 'zeměpis státu'],
                self::HANDLING_WITH_MAGICAL_ITEMS => ['one' => 'zacházení s magickými předměty'],
                self::HISTORIOGRAPHY => ['one' => 'dějeprava'],
                self::KNOWLEDGE_OF_A_CITY => ['one' => 'znalost města'],
                self::KNOWLEDGE_OF_WORLD => ['one' => 'znalost světa'],
                self::MAPS_DRAWING => ['one' => 'kreslení map'],
                self::MYTHOLOGY => ['one' => 'bájesloví'],
                self::READING_AND_WRITING => ['one' => 'čtení a psaní'],
                self::SOCIAL_ETIQUETTE => ['one' => 'společenská etiketa'],
                self::TECHNOLOGY => ['one' => 'technologie'],
                self::THEOLOGY => ['one' => 'teologie'],
                self::ZOOLOGY => ['one' => 'zoologie'],
            ],
        ];
    }

}