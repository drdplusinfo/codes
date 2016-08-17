<?php
namespace DrdPlus\Codes;

abstract class WeaponCode extends ArmamentCode
{

    /**
     * If is not range, is melee
     * @return bool
     */
    abstract public function isMeleeArmament();

    /**
     * If is not melee, is range
     * @return bool
     */
    abstract public function isRangeWeapon();

    /**
     * If is range, can be shooting, throwing or a projectile
     * @return bool
     */
    abstract public function isShootingWeapon();

    /**
     * If is range, can be shooting, throwing or a projectile
     * @return bool
     */
    abstract public function isThrowingWeapon();

    /**
     * If is range, can be a projectile or shooting or throwing
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