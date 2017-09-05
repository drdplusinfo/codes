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
    protected static function getDefaultValues(): array
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

    private static $translations = [
        'en' => [
            self::ARMOR_WEARING => ['one' => 'armor wearing'],
            self::ATHLETICS => ['one' => 'athletics'],
            self::BLACKSMITHING => ['one' => 'blacksmithing'],
            self::BOAT_DRIVING => ['one' => 'boat driving'],
            self::CART_DRIVING => ['one' => 'cart driving'],
            self::CITY_MOVING => ['one' => 'city moving'],
            self::CLIMBING_AND_HILLWALKING => ['one' => 'climbing and hillwalking'],
            self::FAST_MARSH => ['one' => 'fast marsh'],
            self::FIGHT_UNARMED => ['one' => 'fight unarmed'],
            self::FIGHT_WITH_AXES => ['one' => 'fight with axes'],
            self::FIGHT_WITH_KNIFES_AND_DAGGERS => ['one' => 'fight with knifes and daggers'],
            self::FIGHT_WITH_MACES_AND_CLUBS => ['one' => 'fight with maces and clubs'],
            self::FIGHT_WITH_MORNINGSTARS_AND_MORGENSTERNS => ['one' => 'fight with morningstars and morgensterns'],
            self::FIGHT_WITH_SABERS_AND_BOWIE_KNIFES => ['one' => 'fight with sabers and bowie knifes'],
            self::FIGHT_WITH_SHIELDS => ['one' => 'fight with shields'],
            self::FIGHT_WITH_STAFFS_AND_SPEARS => ['one' => 'fight with staffs and spears'],
            self::FIGHT_WITH_SWORDS => ['one' => 'fight with swords'],
            self::FIGHT_WITH_THROWING_WEAPONS => ['one' => 'fight with throwing weapons'],
            self::FIGHT_WITH_TWO_WEAPONS => ['one' => 'fight with two weapons'],
            self::FIGHT_WITH_VOULGES_AND_TRIDENTS => ['one' => 'fight with voulges and tridents'],
            self::FLYING => ['one' => 'flying'],
            self::FOREST_MOVING => ['one' => 'forest moving'],
            self::MOVING_IN_MOUNTAINS => ['one' => 'moving in mountains'],
            self::RIDING => ['one' => 'riding'],
            self::SAILING => ['one' => 'sailing'],
            self::SHIELD_USAGE => ['one' => 'shield usage'],
            self::SWIMMING => ['one' => 'swimming'],
        ],
        'cs' => [
            self::ARMOR_WEARING => ['one' => 'nošení zbroje'],
            self::ATHLETICS => ['one' => 'atletika'],
            self::BLACKSMITHING => ['one' => 'kovářství'],
            self::BOAT_DRIVING => ['one' => 'ovládání loďky'],
            self::CART_DRIVING => ['one' => 'řízení vozu'],
            self::CITY_MOVING => ['one' => 'pohyb ve městě'],
            self::CLIMBING_AND_HILLWALKING => ['one' => 'šplh a lezení'],
            self::FAST_MARSH => ['one' => 'rychlý pochod'],
            self::FIGHT_UNARMED => ['one' => 'boj beze zbraně'],
            self::FIGHT_WITH_AXES => ['one' => 'boj se sekerami'],
            self::FIGHT_WITH_KNIFES_AND_DAGGERS => ['one' => 'boj s noži a dýkami'],
            self::FIGHT_WITH_MACES_AND_CLUBS => ['one' => 'boj s palicemi a kyji'],
            self::FIGHT_WITH_MORNINGSTARS_AND_MORGENSTERNS => ['one' => 'boj se řemdihy a bijáky'],
            self::FIGHT_WITH_SABERS_AND_BOWIE_KNIFES => ['one' => 'boj se šavlemi a tesáky'],
            self::FIGHT_WITH_SHIELDS => ['one' => 'boj se štítem'],
            self::FIGHT_WITH_STAFFS_AND_SPEARS => ['one' => 'boj s holemi a kopími'],
            self::FIGHT_WITH_SWORDS => ['one' => 'boj s meči'],
            self::FIGHT_WITH_THROWING_WEAPONS => ['one' => 'boj s vrhacími zbraněmi'],
            self::FIGHT_WITH_TWO_WEAPONS => ['one' => 'boj se dvěma zbraněmi'],
            self::FIGHT_WITH_VOULGES_AND_TRIDENTS => ['one' => 'boj se sudlicemi a trojzubci'],
            self::FLYING => ['one' => 'letectví'],
            self::FOREST_MOVING => ['one' => 'pohyb v lese'],
            self::MOVING_IN_MOUNTAINS => ['one' => 'pohyb v horách'],
            self::RIDING => ['one' => 'jezdectví'],
            self::SAILING => ['one' => 'námořnictví'],
            self::SHIELD_USAGE => ['one' => 'používání štítu'],
            self::SWIMMING => ['one' => 'plavání'],
        ],
    ];

    protected function fetchTranslations(): array
    {
        return self::$translations;
    }

}