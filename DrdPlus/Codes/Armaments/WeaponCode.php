<?php
namespace DrdPlus\Codes\Armaments;

use DrdPlus\Codes\Partials\TranslatableCode;

abstract class WeaponCode extends TranslatableCode implements WeaponlikeCode
{
    /**
     * @return bool
     */
    public function isProtectiveArmament(): bool
    {
        return false;
    }

    /**
     * @return bool
     */
    public function isWeaponlike(): bool
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isWeapon(): bool
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isShield(): bool
    {
        return false;
    }

    /**
     * @return bool
     */
    public function isProjectile(): bool
    {
        return false;
    }

}