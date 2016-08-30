<?php
namespace DrdPlus\Codes\Armaments;

interface WeaponlikeCode extends ArmamentCode
{
    /**
     * If is not range, is melee
     *
     * @return bool
     */
    public function isMeleeArmament();

    /**
     * If is not melee, is range
     *
     * @return bool
     */
    public function isRangeWeapon();

    /**
     * If is range, can be shooting, throwing or a projectile
     *
     * @return bool
     */
    public function isShootingWeapon();

    /**
     * If is range, can be shooting, throwing or a projectile
     *
     * @return bool
     */
    public function isThrowingWeapon();

    /**
     * If is range, can be a projectile or shooting or throwing
     *
     * @return bool
     */
    public function isProjectile();

    /**
     * @return bool
     */
    public function isShield();

    /**
     * @return MeleeWeaponCode
     */
    public function convertToMeleeWeaponCodeEquivalent();

    /**
     * @return RangeWeaponCode
     */
    public function convertToRangeWeaponCodeEquivalent();

}