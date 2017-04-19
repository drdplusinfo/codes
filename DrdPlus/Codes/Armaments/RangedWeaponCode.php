<?php
namespace DrdPlus\Codes\Armaments;

/**
 * @method static RangedWeaponCode getIt($codeValue)
 */
class RangedWeaponCode extends WeaponCode
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
    public static function getBowValues()
    {
        return [
            self::SHORT_BOW,
            self::LONG_BOW,
            self::SHORT_COMPOSITE_BOW,
            self::LONG_COMPOSITE_BOW,
            self::POWER_BOW,
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
    public static function getCrossbowValues()
    {
        return [
            self::MINICROSSBOW,
            self::LIGHT_CROSSBOW,
            self::MILITARY_CROSSBOW,
            self::HEAVY_CROSSBOW,
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
    public static function getThrowingWeaponValues()
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

    /**
     * @return array|string[]
     */
    public static function getPossibleValues(): array
    {
        return array_values( // to get continual integer keys
            array_merge(
                self::getBowValues(),
                self::getCrossbowValues(),
                self::getThrowingWeaponValues()
            )
        );
    }

    /**
     * @return bool
     */
    public function isMelee()
    {
        return $this->getValue() === self::SPEAR; // spear can be used both as a range and melee weapon
    }

    /**
     * @return bool
     */
    public function isRanged()
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isBow()
    {
        return in_array($this->getValue(), self::getBowValues(), true);
    }

    /**
     * @return bool
     */
    public function isCrossbow()
    {
        return in_array($this->getValue(), self::getCrossbowValues(), true);
    }

    /**
     * @return bool
     */
    public function isThrowingWeapon()
    {
        return in_array($this->getValue(), self::getThrowingWeaponValues(), true);
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
     * @throws \DrdPlus\Codes\Armaments\Exceptions\CanNotBeConvertedToMeleeWeaponCode
     */
    public function convertToMeleeWeaponCodeEquivalent()
    {
        if (!$this->isMelee()) {
            throw new Exceptions\CanNotBeConvertedToMeleeWeaponCode(
                "Range weapon code {$this} can not be converted to melee weapon code"
            );
        }

        return MeleeWeaponCode::getIt($this->getValue());
    }

    /**
     * @return RangedWeaponCode
     */
    public function convertToRangedWeaponCodeEquivalent()
    {
        return $this;
    }

    /**
     * There is currently no ranged weapon which left your hand empty.
     *
     * @return bool
     */
    public function isUnarmed()
    {
        return false;
    }

}