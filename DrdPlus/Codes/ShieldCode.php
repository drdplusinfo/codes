<?php
namespace DrdPlus\Codes;

/**
 * @method static ShieldCode getIt($codeValue)
 */
class ShieldCode extends MeleeArmamentCode
{
    const WITHOUT_SHIELD = 'without_shield';
    const BUCKLER = 'buckler';
    const SMALL_SHIELD = 'small_shield';
    const MEDIUM_SHIELD = 'medium_shield';
    const HEAVY_SHIELD = 'heavy_shield';
    const PAVISE = 'pavise';

    /**
     * @return array|string[]
     */
    public static function getShieldCodes()
    {
        return [
            self::WITHOUT_SHIELD,
            self::BUCKLER,
            self::SMALL_SHIELD,
            self::MEDIUM_SHIELD,
            self::HEAVY_SHIELD,
            self::PAVISE
        ];
    }

    /**
     * @return bool
     */
    public function isShield()
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isMeleeWeapon()
    {
        return false;
    }

    /**
     * @return bool
     */
    public function isRangeWeapon()
    {
        return false;
    }

    /**
     * @return bool
     */
    public function isShootingWeapon()
    {
        return false;
    }

    /**
     * @return bool
     */
    public function isThrowingWeapon()
    {
        return false;
    }

    /**
     * @return bool
     */
    public function isProjectile()
    {
        return false;
    }

    /**
     * @throws Exceptions\CanNotBeConvertedToMeleeWeaponCode
     */
    public function convertToMeleeWeaponCodeEquivalent()
    {
        throw new Exceptions\CanNotBeConvertedToMeleeWeaponCode(
            "Shield code {$this} can not be converted to melee weapon code"
        );
    }

    /**
     * @throws Exceptions\CanNotBeConvertedToRangeWeaponCode
     */
    public function convertToRangeWeaponCodeEquivalent()
    {
        throw new Exceptions\CanNotBeConvertedToRangeWeaponCode(
            "Shield code {$this} can not be converted to range weapon code"
        );
    }

}