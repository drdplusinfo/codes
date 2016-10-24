<?php
namespace DrdPlus\Codes\Armaments;

interface WeaponlikeCode extends ArmamentCode
{

    /**
     * If is not ranged weapon-like, is melee weapon-like (weapon or shield)
     *
     * @return bool
     */
    public function isMelee();

    /**
     * If is not melee weapon-like, is ranged-weaponlike.
     *
     * @return bool
     */
    public function isRanged();

    /**
     * Even shield can be used for (desperate) attack - that is why is weapon-like.
     *
     * @return bool
     */
    public function isShield();

    /**
     * Is it primarily a weapon, not a shield or something like that?
     *
     * @return bool
     */
    public function isWeapon();

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
     * @return MeleeWeaponCode
     */
    public function convertToMeleeWeaponCodeEquivalent();

    /**
     * @return RangedWeaponCode
     */
    public function convertToRangedWeaponCodeEquivalent();

    /**
     * @return bool
     */
    public function isUnarmed();

}