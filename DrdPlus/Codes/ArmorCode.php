<?php
namespace DrdPlus\Codes;

abstract class ArmorCode extends ArmamentCode
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
    public function isArmor()
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isWeaponlike()
    {
        return false;
    }

}