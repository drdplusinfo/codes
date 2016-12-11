<?php
namespace DrdPlus\Codes\Armaments;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static ShieldCode getIt($codeValue)
 */
class ShieldCode extends AbstractCode implements MeleeWeaponlikeCode, ProtectiveArmamentCode
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
    public static function getPossibleValues()
    {
        return [
            self::WITHOUT_SHIELD,
            self::BUCKLER,
            self::SMALL_SHIELD,
            self::MEDIUM_SHIELD,
            self::HEAVY_SHIELD,
            self::PAVISE,
        ];
    }

    /**
     * @return bool
     */
    public function isProtectiveArmament()
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isArmor()
    {
        return false;
    }

    /**
     * @return bool
     */
    public function isMelee()
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isWeaponlike()
    {
        return true;
    }

    /**
     * Shield CAN be used as a weapon (is weapon-like), but it is NOT a standard weapon (is not a weapon)
     *
     * @return bool
     */
    public function isWeapon()
    {
        return false;
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
    public function isRanged()
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
    public function convertToRangedWeaponCodeEquivalent()
    {
        throw new Exceptions\CanNotBeConvertedToRangeWeaponCode(
            "Shield code {$this} can not be converted to range weapon code"
        );
    }

    /**
     * @return bool
     */
    public function isUnarmed()
    {
        return $this->getValue() === self::WITHOUT_SHIELD;
    }

}