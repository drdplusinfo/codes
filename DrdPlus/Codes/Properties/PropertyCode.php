<?php
namespace DrdPlus\Codes\Properties;

use DrdPlus\Codes\TranslatableCode;

/**
 * @method static PropertyCode getIt($codeValue)
 */
class PropertyCode extends TranslatableCode
{
    const STRENGTH = 'strength';
    const AGILITY = 'agility';
    const KNACK = 'knack';
    const WILL = 'will';
    const INTELLIGENCE = 'intelligence';
    const CHARISMA = 'charisma';

    /**
     * @return array|string[]
     */
    public static function getBasePropertyPossibleValues(): array
    {
        return [
            self::STRENGTH,
            self::AGILITY,
            self::KNACK,
            self::WILL,
            self::INTELLIGENCE,
            self::CHARISMA,
        ];
    }

    // body
    const AGE = 'age';
    const HEIGHT_IN_CM = 'height_in_cm';
    const HEIGHT = 'height';
    const WEIGHT_IN_KG = 'weight_in_kg';
    const WEIGHT = 'weight';
    const SIZE = 'size';

    /**
     * @return array|string[]
     */
    public static function getBodyPropertyPossibleValues(): array
    {
        return [
            self::AGE,
            self::HEIGHT_IN_CM,
            self::HEIGHT,
            self::WEIGHT_IN_KG,
            self::WEIGHT,
            self::SIZE,
        ];
    }

    // derived
    const BEAUTY = 'beauty';
    const DANGEROUSNESS = 'dangerousness';
    const DIGNITY = 'dignity';
    const ENDURANCE = 'endurance';
    const FATIGUE_BOUNDARY = 'fatigue_boundary';
    const SENSES = 'senses';
    const SPEED = 'speed';
    const TOUGHNESS = 'toughness';
    const WOUND_BOUNDARY = 'wound_boundary';
    const MOVEMENT_SPEED = 'movement_speed';
    const MAXIMAL_LOAD = 'maximal_load';

    /**
     * @return array|string[]
     */
    public static function getDerivedPropertyPossibleValues(): array
    {
        return [
            self::BEAUTY,
            self::DANGEROUSNESS,
            self::DIGNITY,
            self::ENDURANCE,
            self::FATIGUE_BOUNDARY,
            self::SENSES,
            self::SPEED,
            self::TOUGHNESS,
            self::WOUND_BOUNDARY,
            self::MOVEMENT_SPEED,
            self::MAXIMAL_LOAD,
        ];
    }

    // native
    const REMARKABLE_SENSE = 'remarkable_sense';
    const INFRAVISION = 'infravision';
    const NATIVE_REGENERATION = 'native_regeneration';

    /**
     * @return array|string[]
     */
    public static function getNativePropertyPossibleValues(): array
    {
        return [
            self::INFRAVISION,
            self::NATIVE_REGENERATION,
            self::REMARKABLE_SENSE,
        ];
    }

    // remarkable senses
    const HEARING = RemarkableSenseCode::HEARING;
    const SIGHT = RemarkableSenseCode::SIGHT;
    const SMELL = RemarkableSenseCode::SMELL;
    const TASTE = RemarkableSenseCode::TASTE;
    const TOUCH = RemarkableSenseCode::TOUCH;

    /**
     * @return array|string[]
     */
    public static function getRemarkableSensePropertyPossibleValues(): array
    {
        return RemarkableSenseCode::getPossibleValues();
    }

    // restrictions
    const REQUIRES_DM_AGREEMENT = 'requires_dm_agreement';

    /**
     * @return array|string[]
     */
    public static function getRestrictionPropertyPossibleValues(): array
    {
        return [
            self::REQUIRES_DM_AGREEMENT,
        ];
    }

    /**
     * @return array|string[]
     */
    public static function getPossibleValues(): array
    {
        return array_merge(
            self::getBasePropertyPossibleValues(),
            self::getBodyPropertyPossibleValues(),
            self::getDerivedPropertyPossibleValues(),
            self::getNativePropertyPossibleValues(),
            self::getRemarkableSensePropertyPossibleValues(),
            self::getRestrictionPropertyPossibleValues()
        );
    }

    private static $translations = [
        'cs' => [
            self::STRENGTH => ['one' => 'síla', 'few' => 'síly', 'many' => 'sil'],
            self::AGILITY => ['one' => 'obratnost', 'few' => 'obratnosti', 'many' => 'obratností'],
            self::KNACK => ['one' => 'zručnost', 'few' => 'zručnosti', 'many' => 'zručností'],
            self::WILL => ['one' => 'vůle', 'few' => 'vůle', 'many' => 'vůlí'],
            self::INTELLIGENCE => ['one' => 'intelligence', 'few' => 'intelligence', 'many' => 'intelligencí'],
            self::CHARISMA => ['one' => 'charisma', 'few' => 'charismy', 'many' => 'charisem'],
            self::AGE => ['one' => 'věk', 'few' => 'věky', 'many' => 'věků'],
            self::HEIGHT_IN_CM => ['one' => 'výška v cm', 'few' => 'výšky cm', 'many' => 'výšek v cm'],
            self::HEIGHT => ['one' => 'výška', 'few' => 'výšky', 'many' => 'výšek'],
            self::WEIGHT_IN_KG => ['one' => 'váha v kg', 'few' => 'váhy kg', 'many' => 'váh v kg'],
            self::WEIGHT => ['one' => 'váha', 'few' => 'váhy', 'many' => 'váh'],
            self::SIZE => ['one' => 'velikost', 'few' => 'velikosti', 'many' => 'velikostí'],
            self::BEAUTY => ['one' => 'krása', 'few' => 'krásy', 'many' => 'krás'],
            self::DANGEROUSNESS => ['one' => 'nebezpečnost', 'few' => 'nebezpečnosti', 'many' => 'nebezpečností'],
            self::DIGNITY => ['one' => 'důstojnost', 'few' => 'důstojnosti', 'many' => 'důstojností'],
            self::ENDURANCE => ['one' => 'výdrž', 'few' => 'výdrže', 'many' => 'výdrží'],
            self::FATIGUE_BOUNDARY => ['one' => 'mez únavy', 'few' => 'meze únavy', 'many' => 'mezí únavy'],
            self::SENSES => ['one' => 'smysly', 'few' => 'smysly', 'many' => 'smysly'],
            self::SPEED => ['one' => 'rychlost', 'few' => 'rychlosti', 'many' => 'rychlostí'],
            self::TOUGHNESS => ['one' => 'odolnost', 'few' => 'odolnosti', 'many' => 'odolností'],
            self::WOUND_BOUNDARY => ['one' => 'mez zranění', 'few' => 'meze zranění', 'many' => 'meze zranění'],
            self::MOVEMENT_SPEED => ['one' => 'pohybová rychlost', 'few' => 'pohybové rychlosti', 'many' => 'pohybových rychlostí'],
            self::MAXIMAL_LOAD => ['one' => 'maximální naložení', 'few' => 'maximální naložení', 'many' => 'maximálních naložení'],
            self::INFRAVISION => ['one' => 'infravize', 'few' => 'infravize', 'many' => 'infravizí'],
            self::NATIVE_REGENERATION => ['one' => 'přirozená regenerace', 'few' => 'přirozené regenerace', 'many' => 'přirozených regenerací'],
            self::REMARKABLE_SENSE => ['one' => 'význačný smysl', 'few' => 'význačné smysly', 'many' => 'význačných smyslů'],
            self::HEARING => ['one' => 'sluch', 'few' => 'sluchy', 'many' => 'sluchů'],
            self::SIGHT => ['one' => 'zrak', 'few' => 'zraky', 'many' => 'zraků'],
            self::SMELL => ['one' => 'čich', 'few' => 'čichy', 'many' => 'čich'],
            self::TASTE => ['one' => 'chuť', 'few' => 'chutě', 'many' => 'chutí'],
            self::TOUCH => ['one' => 'hmat', 'few' => 'hmaty', 'many' => 'hmatů'],
            self::REQUIRES_DM_AGREEMENT => ['one' => 'vyžaduje souhlas PJ', 'few' => 'vyžadují souhlas PJ', 'many' => 'vyžadují souhlas PJ'],
        ],
    ];

    protected function getTranslations(string $languageCode): array
    {
        return self::$translations[$languageCode] ?? [];
    }

}