<?php
namespace DrdPlus\Codes;

class WeaponCodes
{
    // axes
    const LIGHT_AXE = 'light_axe';
    const AXE = 'axe';
    const WAR_AXE = 'war_axe';
    const TWO_HANDED_AXE = 'two_handed_axe';

    /**
     * @return array|string[]
     */
    public static function getAxeCodes()
    {
        return [
            self::LIGHT_AXE,
            self::AXE,
            self::WAR_AXE,
            self::TWO_HANDED_AXE,
        ];
    }

    // knifes and daggers
    const KNIFE = 'knife';
    const DAGGER = 'dagger';
    const STABBING_DAGGER = 'stabbing_dagger';
    const LONG_KNIFE = 'long_knife';
    const LONG_DAGGER = 'long_dagger';

    /**
     * @return array|string[]
     */
    public static function getKnifeAndDaggerCodes()
    {
        return [
            self::KNIFE,
            self::DAGGER,
            self::STABBING_DAGGER,
            self::LONG_KNIFE,
            self::LONG_DAGGER,
        ];
    }

    // maces and clubs
    const CUDGEL = 'cudgel';
    const CLUB = 'club';
    const HOBNAILED_CLUB = 'hobnailed_club';
    const LIGHT_MACE = 'light_mace';
    const MACE = 'mace';
    const HEAVY_CLUB = 'heavy_club';
    const WAR_HAMMER = 'war_hammer';
    const TWO_HANDED_CLUB = 'two_handed_club';
    const HEAVY_SLEDGEHAMMER = 'heavy_sledgehammer';

    public static function getMaceAndClubCodes()
    {
        return [
            self::CUDGEL,
            self::CLUB,
            self::HOBNAILED_CLUB,
            self::LIGHT_MACE,
            self::MACE,
            self::HEAVY_CLUB,
            self::WAR_HAMMER,
            self::TWO_HANDED_CLUB,
            self::HEAVY_SLEDGEHAMMER,
        ];
    }
}