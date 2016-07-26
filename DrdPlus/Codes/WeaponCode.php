<?php
namespace DrdPlus\Codes;

/**
 * @method static WeaponCode getIt($code)
 */
abstract class WeaponCode extends ArmamentCode
{

    /**
     * @return bool
     */
    abstract public function isMeleeWeapon();

    /**
     * @return bool
     */
    abstract public function isRangeWeapon();

    /**
     * @return bool
     */
    abstract public function isShootingWeapon();

    /**
     * @return bool
     */
    abstract public function isThrowingWeapon();

    /**
     * @return bool
     */
    abstract public function isProjectile();

    /**
     * @return MeleeWeaponCode
     */
    abstract public function convertToMeleeWeaponCodeEquivalent();

    /**
     * @return RangeWeaponCode
     */
    abstract public function convertToRangeWeaponCodeEquivalent();

}