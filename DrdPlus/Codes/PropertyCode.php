<?php
namespace DrdPlus\Codes;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static PropertyCode getIt($codeValue)
 */
class PropertyCode extends AbstractCode
{
    // base
    const STRENGTH = 'strength';
    const AGILITY = 'agility';
    const KNACK = 'knack';
    const WILL = 'will';
    const INTELLIGENCE = 'intelligence';
    const CHARISMA = 'charisma';

    /**
     * @return array|string[]
     */
    public static function getBasePropertyCodes()
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
    const WEIGHT_IN_KG = 'weight_in_kg';
    const WEIGHT = 'weight';
    const SIZE = 'size';

    /**
     * @return array|string[]
     */
    public static function getBodyPropertyCodes()
    {
        return [
            self::AGE,
            self::HEIGHT_IN_CM,
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
    public static function getDerivedPropertyCodes()
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
    public static function getNativePropertyCodes()
    {
        return [
            self::INFRAVISION,
            self::NATIVE_REGENERATION,
            self::REMARKABLE_SENSE,
        ];
    }

    // remarkable senses
    const HEARING = 'hearing';
    const SIGHT = 'sight';
    const SMELL = 'smell';
    const TASTE = 'taste';
    const TOUCH = 'touch';

    /**
     * @return array|string[]
     */
    public static function getRemarkableSensePropertyCodes()
    {
        return [
            self::HEARING,
            self::SIGHT,
            self::SMELL,
            self::TASTE,
            self::TOUCH,
        ];
    }

    // restrictions
    const REQUIRES_DM_AGREEMENT = 'requires_dm_agreement';

    /**
     * @return array|string[]
     */
    public static function getRestrictionPropertyCodes()
    {
        return [
            self::REQUIRES_DM_AGREEMENT,
        ];
    }

    /**
     * @return array|string[]
     */
    public static function getPropertyCodes()
    {
        return array_merge(
            self::getBasePropertyCodes(),
            self::getBodyPropertyCodes(),
            self::getDerivedPropertyCodes(),
            self::getNativePropertyCodes(),
            self::getRemarkableSensePropertyCodes(),
            self::getRestrictionPropertyCodes()
        );
    }
}
