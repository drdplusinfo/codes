<?php
namespace DrdPlus\Codes\Armaments;

use DrdPlus\Codes\Code;

abstract class WeaponCode extends Code implements WeaponlikeCode
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