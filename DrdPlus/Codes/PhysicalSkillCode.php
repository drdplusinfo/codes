<?php
namespace DrdPlus\Codes;

/**
 * @method static PhysicalSkillCode getIt($codeValue)
 */
class PhysicalSkillCode extends SkillCode
{
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

    /**
     * @return array|string[]
     */
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
}