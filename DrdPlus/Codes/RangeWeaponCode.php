<?php
namespace DrdPlus\Codes;

/**
 * @method static RangeWeaponCode getIt($code)
 */
class RangeWeaponCode extends WeaponCode
{

    // bows
    const SHORT_BOW = 'short_bow';
    const LONG_BOW = 'long_bow';
    const SHORT_COMPOSITE_BOW = 'short_composite_bow';
    const LONG_COMPOSITE_BOW = 'long_composite_bow';
    const POWER_BOW = 'power_bow';

    /**
     * @return array|string[]
     */
    public static function getBowCodes()
    {
        return [
            self::SHORT_BOW,
            self::LONG_BOW,
            self::SHORT_COMPOSITE_BOW,
            self::LONG_COMPOSITE_BOW,
            self::POWER_BOW,
        ];
    }

    // arrows
    const BASIC_ARROW = 'basic_arrow';
    const LONG_RANGE_ARROW = 'long_range_arrow';
    const WAR_ARROW = 'war_arrow';
    const PIERCING_ARROW = 'piercing_arrow';
    const HOLLOW_ARROW = 'hollow_arrow';
    const CRIPPLING_ARROW = 'crippling_arrow';
    const INCENDIARY_ARROW = 'incendiary_arrow';
    const SILVER_ARROW = 'silver_arrow';

    /**
     * @return array|string[]
     */
    public static function getArrowCodes()
    {
        return [
            self::BASIC_ARROW,
            self::LONG_RANGE_ARROW,
            self::WAR_ARROW,
            self::PIERCING_ARROW,
            self::HOLLOW_ARROW,
            self::CRIPPLING_ARROW,
            self::INCENDIARY_ARROW,
            self::SILVER_ARROW,
        ];
    }

    // crossbows
    const MINICROSSBOW = 'minicrossbow';
    const LIGHT_CROSSBOW = 'light_crossbow';
    const MILITARY_CROSSBOW = 'military_crossbow';
    const HEAVY_CROSSBOW = 'heavy_crossbow';

    /**
     * @return array|string[]
     */
    public static function getCrossbowCodes()
    {
        return [
            self::MINICROSSBOW,
            self::LIGHT_CROSSBOW,
            self::MILITARY_CROSSBOW,
            self::HEAVY_CROSSBOW,
        ];
    }

    // darts
    const BASIC_DART = 'basic_dart';
    const WAR_DART = 'war_dart';
    const PIERCING_DART = 'piercing_dart';
    const HOLLOW_DART = 'hollow_dart';
    const SILVER_DART = 'silver_dart';

    /**
     * @return array|string[]
     */
    public static function getDartCodes()
    {
        return [
            self::BASIC_DART,
            self::WAR_DART,
            self::PIERCING_DART,
            self::HOLLOW_DART,
            self::SILVER_DART,
        ];
    }

    // throwing weapons
    const ROCK = 'rock';
    const THROWING_DAGGER = 'throwing_dagger';
    const LIGHT_THROWING_AXE = 'light_throwing_axe';
    const WAR_THROWING_AXE = 'war_throwing_axe';
    const THROWING_HAMMER = 'throwing_hammer';
    const SHURIKEN = 'shuriken';
    const SPEAR = 'spear';
    const JAVELIN = 'javelin';
    const SLING = 'sling';

    /**
     * @return array|string[]
     */
    public static function getThrowingWeaponCodes()
    {
        return [
            self::ROCK,
            self::THROWING_DAGGER,
            self::LIGHT_THROWING_AXE,
            self::WAR_THROWING_AXE,
            self::THROWING_HAMMER,
            self::SHURIKEN,
            self::SPEAR,
            self::JAVELIN,
            self::SLING,
        ];
    }

    // sling stones
    const SLING_STONE_LIGHT = 'sling_stone_light';
    const SLING_STONE_HEAVIER = 'sling_stone_heavier';

    /**
     * @return array|string[]
     */
    public static function getSlingStoneCodes()
    {
        return [
            self::SLING_STONE_LIGHT,
            self::SLING_STONE_HEAVIER,
        ];
    }

    /**
     * @return array|string[]
     */
    public static function getRangeWeaponCodes()
    {
        return array_values( // to get continual integer keys
            array_merge(
                self::getBowCodes(),
                self::getArrowCodes(),
                self::getCrossbowCodes(),
                self::getDartCodes(),
                self::getThrowingWeaponCodes(),
                self::getSlingStoneCodes()
            )
        );
    }

    /**
     * @return bool
     */
    public function isMeleeWeapon()
    {
        return $this->getValue() === self::SPEAR; // spear can be used both as a range and melee weapon
    }

    /**
     * @return bool
     */
    public function isRangeWeapon()
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isBow()
    {
        return in_array($this->getValue(), self::getBowCodes(), true);
    }

    /**
     * @return bool
     */
    public function isArrow()
    {
        return in_array($this->getValue(), self::getArrowCodes(), true);
    }

    /**
     * @return bool
     */
    public function isCrossbow()
    {
        return in_array($this->getValue(), self::getCrossbowCodes(), true);
    }

    /**
     * @return bool
     */
    public function isDart()
    {
        return in_array($this->getValue(), self::getDartCodes(), true);
    }

    /**
     * @return bool
     */
    public function isSlingStone()
    {
        return in_array($this->getValue(), self::getSlingStoneCodes(), true);
    }

    /**
     * @return bool
     */
    public function isThrowingWeapon()
    {
        return in_array($this->getValue(), self::getThrowingWeaponCodes(), true);
    }

    /**
     * @return bool
     */
    public function isProjectile()
    {
        return $this->isArrow() || $this->isDart() || $this->isSlingStone();
    }

    /**
     * @return bool
     */
    public function isShootingWeapon()
    {
        return $this->isBow() || $this->isCrossbow();
    }

    /**
     * @return MeleeWeaponCode
     * @throws \DrdPlus\Codes\Exceptions\CanNotBeConvertedToMeleeWeaponCode
     */
    public function convertToMeleeWeaponCodeEquivalent()
    {
        if (!$this->isMeleeWeapon()) {
            throw new Exceptions\CanNotBeConvertedToMeleeWeaponCode(
                "Range weapon code {$this} can not be converted to melee weapon code"
            );
        }

        return MeleeWeaponCode::getIt($this->getValue());
    }
}