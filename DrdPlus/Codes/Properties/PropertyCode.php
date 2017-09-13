<?php
namespace DrdPlus\Codes\Properties;

use DrdPlus\Codes\Partials\TranslatableCode;

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
    const BODY_WEIGHT_IN_KG = 'body_weight_in_kg';
    const BODY_WEIGHT = 'body_weight';
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
            self::BODY_WEIGHT_IN_KG,
            self::BODY_WEIGHT,
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

    protected function fetchTranslations(): array
    {
        return [
            'en' => [
                self::STRENGTH => ['one' => 'strength', 'few' => 'strengths', 'many' => 'strengths'],
                self::AGILITY => ['one' => 'agility', 'few' => 'agilities', 'many' => 'agilities'],
                self::KNACK => ['one' => 'knack', 'few' => 'knacks', 'many' => 'knacks'],
                self::WILL => ['one' => 'will', 'few' => 'wills', 'many' => 'wills'],
                self::INTELLIGENCE => ['one' => 'intelligence', 'few' => 'intelligences', 'many' => 'intelligences'],
                self::CHARISMA => ['one' => 'charisma', 'few' => 'charismata', 'many' => 'charismata'],
                self::AGE => ['one' => 'age', 'few' => 'ages', 'many' => 'ages'],
                self::HEIGHT_IN_CM => ['one' => 'height in cm', 'few' => 'heights in cm', 'many' => 'heights in cm'],
                self::HEIGHT => ['one' => 'height', 'few' => 'heights', 'many' => 'heights'],
                self::BODY_WEIGHT_IN_KG => ['one' => 'body weight in kg', 'few' => 'body weights in kg', 'many' => 'body weights in kg'],
                self::BODY_WEIGHT => ['one' => 'body weight', 'few' => 'body weights', 'many' => 'body weights'],
                self::SIZE => ['one' => 'size', 'few' => 'sizes', 'many' => 'sizes'],
                self::BEAUTY => ['one' => 'beauty', 'few' => 'beauties', 'many' => 'beauties'],
                self::DANGEROUSNESS => ['one' => 'dangerousness', 'few' => 'dangerousnesses', 'many' => 'dangerousnesses'],
                self::DIGNITY => ['one' => 'dignity', 'few' => 'dignities', 'many' => 'dignities'],
                self::ENDURANCE => ['one' => 'endurance', 'few' => 'endurances', 'many' => 'endurances'],
                self::FATIGUE_BOUNDARY => ['one' => 'fatigue boundary', 'few' => 'fatigue boundaries', 'many' => 'fatigue boundaries'],
                self::SENSES => ['one' => 'senses', 'few' => 'senses', 'many' => 'senses'],
                self::SPEED => ['one' => 'speed', 'few' => 'speeds', 'many' => 'speeds'],
                self::TOUGHNESS => ['one' => 'toughness', 'few' => 'toughnesses', 'many' => 'toughnesses'],
                self::WOUND_BOUNDARY => ['one' => 'wound boundary', 'few' => 'wound boundaries', 'many' => 'wound boundaries'],
                self::MOVEMENT_SPEED => ['one' => 'movement speed', 'few' => 'movement speeds', 'many' => 'movement speeds'],
                self::MAXIMAL_LOAD => ['one' => 'maximal load', 'few' => 'maximal loads', 'many' => 'maximal loads'],
                self::INFRAVISION => ['one' => 'infravision', 'few' => 'infravisions', 'many' => 'infravisions'],
                self::NATIVE_REGENERATION => ['one' => 'native regeneration', 'few' => 'native regenerations', 'many' => 'native regenerations'],
                self::REMARKABLE_SENSE => ['one' => 'remarkable sense', 'few' => 'remarkable senses', 'many' => 'remarkable senses'],
                self::HEARING => ['one' => 'hearing', 'few' => 'hearings', 'many' => 'hearings'],
                self::SIGHT => ['one' => 'sight', 'few' => 'sights', 'many' => 'sights'],
                self::SMELL => ['one' => 'smell', 'few' => 'smells', 'many' => 'smells'],
                self::TASTE => ['one' => 'taste', 'few' => 'tastes', 'many' => 'tastes'],
                self::TOUCH => ['one' => 'touch', 'few' => 'touches', 'many' => 'touches'],
                self::REQUIRES_DM_AGREEMENT => ['one' => 'requires DM agreement', 'few' => 'requires DM agreements', 'many' => 'requires DM agreements'],
            ],
            'cs' => [
                self::STRENGTH => ['one' => 'síla', 'few' => 'síly', 'many' => 'sil'],
                self::AGILITY => ['one' => 'obratnost', 'few' => 'obratnosti', 'many' => 'obratností'],
                self::KNACK => ['one' => 'zručnost', 'few' => 'zručnosti', 'many' => 'zručností'],
                self::WILL => ['one' => 'vůle', 'few' => 'vůle', 'many' => 'vůlí'],
                self::INTELLIGENCE => ['one' => 'inteligence', 'few' => 'inteligence', 'many' => 'inteligencí'],
                self::CHARISMA => ['one' => 'charisma', 'few' => 'charismy', 'many' => 'charisem'],
                self::AGE => ['one' => 'věk', 'few' => 'věky', 'many' => 'věků'],
                self::HEIGHT_IN_CM => ['one' => 'výška v cm', 'few' => 'výšky cm', 'many' => 'výšek v cm'],
                self::HEIGHT => ['one' => 'výška', 'few' => 'výšky', 'many' => 'výšek'],
                self::BODY_WEIGHT_IN_KG => ['one' => 'váha v kg', 'few' => 'váhy kg', 'many' => 'váh v kg'],
                self::BODY_WEIGHT => ['one' => 'váha', 'few' => 'váhy', 'many' => 'váh'],
                self::SIZE => ['one' => 'velikost', 'few' => 'velikosti', 'many' => 'velikostí'],
                self::BEAUTY => ['one' => 'krása', 'few' => 'krásy', 'many' => 'krás'],
                self::DANGEROUSNESS => ['one' => 'nebezpečnost', 'few' => 'nebezpečnosti', 'many' => 'nebezpečností'],
                self::DIGNITY => ['one' => 'důstojnost', 'few' => 'důstojnosti', 'many' => 'důstojností'],
                self::ENDURANCE => ['one' => 'výdrž', 'few' => 'výdrže', 'many' => 'výdrží'],
                self::FATIGUE_BOUNDARY => ['one' => 'mez únavy', 'few' => 'meze únavy', 'many' => 'mezí únavy'],
                self::SENSES => ['one' => 'smysly', 'few' => 'smysly', 'many' => 'smysly'],
                self::SPEED => ['one' => 'rychlost', 'few' => 'rychlosti', 'many' => 'rychlostí'],
                self::TOUGHNESS => ['one' => 'odolnost', 'few' => 'odolnosti', 'many' => 'odolností'],
                self::WOUND_BOUNDARY => ['one' => 'mez zranění', 'few' => 'meze zranění', 'many' => 'mezí zranění'],
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
                self::REQUIRES_DM_AGREEMENT => ['one' => 'vyžaduje souhlas PJ', 'few' => 'vyžadují souhlas PJ', 'many' => 'vyžaduje souhlas PJ'],
            ],
        ];
    }

}