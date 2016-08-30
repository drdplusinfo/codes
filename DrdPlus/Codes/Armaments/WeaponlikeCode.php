<?php
namespace DrdPlus\Codes\Armaments;

use DrdPlus\Codes\Code;

abstract class WeaponlikeCode extends Code implements ArmamentCode
{
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
    public function isWeaponlike()
    {
        return true;
    }

    /**
     * If is not range, is melee
     *
     * @return bool
     */
    abstract public function isMeleeArmament();

    /**
     * If is not melee, is range
     *
     * @return bool
     */
    abstract public function isRangeWeapon();

    /**
     * If is range, can be shooting, throwing or a projectile
     *
     * @return bool
     */
    abstract public function isShootingWeapon();

    /**
     * If is range, can be shooting, throwing or a projectile
     *
     * @return bool
     */
    abstract public function isThrowingWeapon();

    /**
     * If is range, can be a projectile or shooting or throwing
     *
     * @return bool
     */
    abstract public function isProjectile();

    /**
     * @return bool
     */
    abstract public function isShield();

    /**
     * @return MeleeWeaponCode
     */
    abstract public function convertToMeleeWeaponCodeEquivalent();

    /**
     * @return RangeWeaponCode
     */
    abstract public function convertToRangeWeaponCodeEquivalent();

}