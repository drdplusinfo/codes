<?php
namespace DrdPlus\Codes\Properties;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static PropertyCode getIt($codeValue)
 */
class PropertyCode extends AbstractCode
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
    public static function getBasePropertyPossibleValues()
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
    public static function getBodyPropertyPossibleValues()
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
    public static function getDerivedPropertyPossibleValues()
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
    public static function getNativePropertyPossibleValues()
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
    public static function getRemarkableSensePropertyPossibleValues()
    {
        return RemarkableSenseCode::getPossibleValues();
    }

    // restrictions
    const REQUIRES_DM_AGREEMENT = 'requires_dm_agreement';

    /**
     * @return array|string[]
     */
    public static function getRestrictionPropertyPossibleValues()
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
}