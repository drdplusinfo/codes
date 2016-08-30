<?php
namespace DrdPlus\Codes;

abstract class ArmamentCode extends Code
{
    /**
     * @return bool
     */
    abstract public function isArmor();

    /**
     * @return bool
     */
    abstract public function isWeaponlike();

}