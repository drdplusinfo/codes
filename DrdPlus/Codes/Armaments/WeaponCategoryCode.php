<?php
namespace DrdPlus\Codes\Armaments;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static WeaponCategoryCode getIt($codeValue)
 */
class WeaponCategoryCode extends AbstractCode
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
    public static function getMeleeWeaponCategoryValues()
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
    // throwing weapons
    const THROWING_WEAPON = 'throwing_weapon';

    /**
     * @return array|string[]
     */
    public static function getRangedWeaponCategoryValues()
    {
        return [
            self::BOW,
            self::CROSSBOW,
            self::THROWING_WEAPON,
        ];
    }

    // projectiles
    const ARROW = 'arrow';
    const DART = 'dart';
    const SLING_STONE = 'sling_stone';

    /**
     * @return array|string[]
     */
    public static function getProjectilesCategoryValues()
    {
        return [
            self::ARROW,
            self::DART,
            self::SLING_STONE,
        ];
    }

    /**
     * @return array|string[]
     */
    public static function getPossibleValues()
    {
        return array_merge(
            self::getMeleeWeaponCategoryValues(),
            self::getRangedWeaponCategoryValues(),
            self::getProjectilesCategoryValues()
        );
    }
}