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
}