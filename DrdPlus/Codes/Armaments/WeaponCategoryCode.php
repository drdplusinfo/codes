<?php
namespace DrdPlus\Codes\Armaments;

use DrdPlus\Codes\Partials\TranslatableCode;

/**
 * @method static WeaponCategoryCode getIt($codeValue)
 */
class WeaponCategoryCode extends TranslatableCode
{
    // MELEE WEAPON CATEGORIES

    const AXE = 'axe';
    const KNIFE_AND_DAGGER = 'knife_and_dagger';
    const MACE_AND_CLUB = 'mace_and_club';
    const MORNINGSTAR_AND_MORGENSTERN = 'morningstar_and_morgenstern';
    const SABER_AND_BOWIE_KNIFE = 'saber_and_bowie_knife';
    const STAFF_AND_SPEAR = 'staff_and_spear';
    const SWORD = 'sword';
    const VOULGE_AND_TRIDENT = 'voulge_and_trident';
    const UNARMED = 'unarmed';

    /**
     * @return array|string[]
     */
    public static function getMeleeWeaponCategoryValues(): array
    {
        return [
            self::AXE,
            self::KNIFE_AND_DAGGER,
            self::MACE_AND_CLUB,
            self::MORNINGSTAR_AND_MORGENSTERN,
            self::SABER_AND_BOWIE_KNIFE,
            self::STAFF_AND_SPEAR,
            self::SWORD,
            self::VOULGE_AND_TRIDENT,
            self::UNARMED,
        ];
    }

    public function isMeleeWeaponCategory(): bool
    {
        return in_array($this->getValue(), static::getMeleeWeaponCategoryValues(), true);
    }

    // RANGE WEAPON CATEGORIES

    // shooting weapons
    const BOW = 'bow';
    const CROSSBOW = 'crossbow';
    // throwing weapons
    const THROWING_WEAPON = 'throwing_weapon';

    /**
     * @return array|string[]
     */
    public static function getRangedWeaponCategoryValues(): array
    {
        return [
            self::BOW,
            self::CROSSBOW,
            self::THROWING_WEAPON,
        ];
    }

    public function isRangedWeaponCategory(): bool
    {
        return in_array($this->getValue(), static::getRangedWeaponCategoryValues(), true);
    }

    // projectiles
    const ARROW = 'arrow';
    const DART = 'dart';
    const SLING_STONE = 'sling_stone';

    /**
     * @return array|string[]
     */
    public static function getProjectileCategoryValues(): array
    {
        return [
            self::ARROW,
            self::DART,
            self::SLING_STONE,
        ];
    }

    public function isProjectileCategory(): bool
    {
        return in_array($this->getValue(), static::getProjectileCategoryValues(), true);
    }

    /**
     * @return array|string[]
     */
    public static function getPossibleValues(): array
    {
        return array_merge(
            self::getMeleeWeaponCategoryValues(),
            self::getRangedWeaponCategoryValues(),
            self::getProjectileCategoryValues()
        );
    }

    protected function fetchTranslations(): array
    {
        return [
            'cs' => [
                self::AXE => ['one' => 'sekera', 'few' => 'sekery', 'many' => 'seker'],
                self::KNIFE_AND_DAGGER => ['one' => 'nůž a dýka', 'few' => 'nože a dýky', 'many' => 'nůžů a dýk'],
                self::MACE_AND_CLUB => ['one' => 'palice a kyj', 'few' => 'palice a kyje', 'many' => 'palicí a kyjů'],
                self::MORNINGSTAR_AND_MORGENSTERN => ['one' => 'řemdih a biják', 'few' => 'řemdihy a bijáky', 'many' => 'řemdihů a bijáků'],
                self::SABER_AND_BOWIE_KNIFE => ['one' => 'šavle a tesák', 'few' => 'šavle a tesáky', 'many' => 'šavlí a tesáků'],
                self::STAFF_AND_SPEAR => ['one' => 'hůl a kopí', 'few' => 'hole a kopí', 'many' => 'holí a kopí'],
                self::SWORD => ['one' => 'meč', 'few' => 'meče', 'many' => 'mečů'],
                self::VOULGE_AND_TRIDENT => ['one' => 'Sudlice a trojzubec', 'few' => 'sudlice a trojzubce', 'many' => 'sudlic a trojzubců'],
                self::UNARMED => ['one' => 'beze zbraně', 'few' => 'beze zbraně', 'many' => 'beze zbraně'],
                self::BOW => ['one' => 'luk', 'few' => 'luky', 'many' => 'luků'],
                self::CROSSBOW => ['one' => 'kuše', 'few' => 'kuše', 'many' => 'kuší'],
                self::THROWING_WEAPON => ['one' => 'vrhací zbraň', 'few' => 'vrhací zbraně', 'many' => 'vrhacích zbraní'],
                self::ARROW => ['one' => 'šíp', 'few' => 'šípy', 'many' => 'šípů'],
                self::DART => ['one' => 'šipka', 'few' => 'šipky', 'many' => 'šipek'],
                self::SLING_STONE => ['one' => 'prakový kámen', 'few' => 'prakové kameny', 'many' => 'prakových kamenů'],
            ],
            'en' => [
                self::AXE => ['one' => 'axe', 'few' => 'axes', 'many' => 'axes'],
                self::KNIFE_AND_DAGGER => ['one' => 'knife and dagger', 'few' => 'knifes and daggers', 'many' => 'knifes and daggers'],
                self::MACE_AND_CLUB => ['one' => 'mace and club', 'few' => 'maces and clubs', 'many' => 'maces and clubs'],
                self::MORNINGSTAR_AND_MORGENSTERN => ['one' => 'morningstar and morgenstern', 'few' => 'morningstars and morgensterns', 'many' => 'morningstars and morgensterns'],
                self::SABER_AND_BOWIE_KNIFE => ['one' => 'saber and bowie knife', 'few' => 'sabers and bowie knifes', 'many' => 'sabers and bowie knifes'],
                self::STAFF_AND_SPEAR => ['one' => 'staff and spear', 'few' => 'staffs and spears', 'many' => 'staffs and spears'],
                self::SWORD => ['one' => 'sword', 'few' => 'swords', 'many' => 'swords'],
                self::VOULGE_AND_TRIDENT => ['one' => 'voulge and trident', 'few' => 'voulges and tridents', 'many' => 'voulges and tridents'],
                self::UNARMED => ['one' => 'unarmed', 'few' => 'unarmed', 'many' => 'unarmed'],
                self::BOW => ['one' => 'bow', 'few' => 'bows', 'many' => 'bows'],
                self::CROSSBOW => ['one' => 'crossbow', 'few' => 'crossbows', 'many' => 'crossbows'],
                self::THROWING_WEAPON => ['one' => 'throwing weapon', 'few' => 'throwing weapons', 'many' => 'throwing weapons'],
                self::ARROW => ['one' => 'arrow', 'few' => 'arrows', 'many' => 'arrows'],
                self::DART => ['one' => 'dart', 'few' => 'darts', 'many' => 'darts'],
                self::SLING_STONE => ['one' => 'sling stone', 'few' => 'sling stones', 'many' => 'sling stones'],
            ],
        ];
    }

}