<?php
namespace DrdPlus\Codes\Armaments;

interface ArmamentCode
{
    /**
     * @return bool
     */
    public function isArmor();

    /**
     * @return bool
     */
    public function isWeaponlike();

}