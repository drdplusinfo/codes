<?php
namespace DrdPlus\Codes\Skills;

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
    const FIGHT_UNARMED = 'fight_unarmed';
    const FIGHT_WITH_AXES = 'fight_with_axes';
    const FIGHT_WITH_KNIFES_AND_DAGGERS = 'fight_with_knifes_and_daggers';
    const FIGHT_WITH_MACES_AND_CLUBS = 'fight_with_maces_and_clubs';
    const FIGHT_WITH_MORNINGSTARS_AND_MORGENSTERNS = 'fight_with_morningstars_and_morgensterns';
    const FIGHT_WITH_SABERS_AND_BOWIE_KNIFES = 'fight_with_sabers_and_bowie_knifes';
    const FIGHT_WITH_SHIELDS = 'fight_with_shields'; // do not search this in rules, it is additional
    const FIGHT_WITH_STAFFS_AND_SPEARS = 'fight_with_staffs_and_spears';
    const FIGHT_WITH_SWORDS = 'fight_with_swords';
    const FIGHT_WITH_THROWING_WEAPONS = 'fight_with_throwing_weapons';
    const FIGHT_WITH_TWO_WEAPONS = 'fight_with_two_weapons';
    const FIGHT_WITH_VOULGES_AND_TRIDENTS = 'fight_with_voulges_and_tridents';
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
    public static function getPossibleValues()
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
            self::FIGHT_UNARMED,
            self::FIGHT_WITH_AXES,
            self::FIGHT_WITH_KNIFES_AND_DAGGERS,
            self::FIGHT_WITH_MACES_AND_CLUBS,
            self::FIGHT_WITH_MORNINGSTARS_AND_MORGENSTERNS,
            self::FIGHT_WITH_SABERS_AND_BOWIE_KNIFES,
            self::FIGHT_WITH_SHIELDS,
            self::FIGHT_WITH_STAFFS_AND_SPEARS,
            self::FIGHT_WITH_SWORDS,
            self::FIGHT_WITH_THROWING_WEAPONS,
            self::FIGHT_WITH_TWO_WEAPONS,
            self::FIGHT_WITH_VOULGES_AND_TRIDENTS,
            self::FLYING,
            self::FOREST_MOVING,
            self::MOVING_IN_MOUNTAINS,
            self::RIDING,
            self::SAILING,
            self::SHIELD_USAGE,
            self::SWIMMING,
        ];
    }
}