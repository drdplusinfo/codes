<?php
namespace DrdPlus\Codes;

abstract class MeleeArmamentCode extends WeaponCode
{
    /**
     * @return bool
     */
    public function isMeleeArmament()
    {
        return true;
    }

    /**
     * @return bool
     */
    abstract public function isShield();

    /**
     * @return bool
     */
    abstract public function isMeleeWeapon();
}