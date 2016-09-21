<?php
namespace DrdPlus\Codes\Armaments;

use DrdPlus\Codes\Partials\AbstractCode;

abstract class WeaponCode extends AbstractCode implements WeaponlikeCode
{
    /**
     * @return bool
     */
    public function isProtectiveArmament()
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
     * @return bool
     */
    public function isShield()
    {
        return false;
    }

}