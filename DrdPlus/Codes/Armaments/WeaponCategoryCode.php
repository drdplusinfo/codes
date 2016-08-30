<?php
namespace DrdPlus\Codes\Armaments;
use DrdPlus\Codes\Code;

/**
 * @method static WeaponCategoryCode getIt($codeValue)
 */
class WeaponCategoryCode extends Code
{
    // melee weapon categories
    const AXE = 'axe';
    const KNIFE_OR_DAGGER = 'knife_or_dagger';
    const MACE_OR_CLUB = 'mace_or_club';
    const MORNINGSTAR_OR_MORGENSTERN = 'morningstar_or_morgenstern';
    const SABER_OR_BOWIE_KNIFE = 'saber_or_bowie_knife';
    const STAFF_OR_SPEAR = 'staff_or_spear';
    const SWORD = 'sword';
    const VOULGE_OR_TRIDENT = 'voulge_or_trident';
    const UNARMED = 'unarmed';

    /**
     * @return array|string[]
     */
    public static function getMeleeWeaponCategoryCodes()
    {
        return [
            self::AXE,
            self::KNIFE_OR_DAGGER,
            self::MACE_OR_CLUB,
            self::MORNINGSTAR_OR_MORGENSTERN,
            self::SABER_OR_BOWIE_KNIFE,
            self::STAFF_OR_SPEAR,
            self::SWORD,
            self::VOULGE_OR_TRIDENT,
            self::UNARMED,
        ];
    }

    // range weapon categories

    // shooting weapons
    const BOW = 'bow';
    const CROSSBOW = 'crossbow';
    // projectiles
    const ARROW = 'arrow';
    const DART = 'dart';
    const SLING_STONE = 'sling_stone';
    // throwing weapons
    const THROWING_WEAPON = 'throwing_weapon';

    /**
     * @return array|string[]
     */
    public static function getRangeWeaponCategoryCodes()
    {
        return [
            self::BOW,
            self::CROSSBOW,
            self::THROWING_WEAPON,
            self::ARROW,
            self::DART,
            self::SLING_STONE,
        ];
    }

    /**
     * @return array|string[]
     */
    public static function getWeaponCategoryCodes()
    {
        return array_merge(
            self::getMeleeWeaponCategoryCodes(),
            self::getRangeWeaponCategoryCodes()
        );
    }
}