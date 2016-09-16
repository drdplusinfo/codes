<?php
namespace DrdPlus\Codes\Armaments;

interface WeaponlikeCode extends ArmamentCode
{
    /**
     * If is not range, is melee
     *
     * @return bool
     */
    public function isMelee();

    /**
     * If is not melee, is ranged
     *
     * @return bool
     */
    public function isRanged();

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
     * @return RangedWeaponCode
     */
    public function convertToRangedWeaponCodeEquivalent();

}