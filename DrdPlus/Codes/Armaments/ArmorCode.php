<?php
namespace DrdPlus\Codes\Armaments;

use DrdPlus\Codes\Code;

abstract class ArmorCode extends Code implements ProtectiveArmamentCode
{
    /**
     * @return bool
     */
    abstract public function isHelm();

    /**
     * @return bool
     */
    abstract public function isBodyArmor();

    /**
     * @return bool
     */
    public function isProtectiveArmament()
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isArmor()
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

    /**
     * @return bool
     */
    public function isWeaponlike()
    {
        return false;
    }

}