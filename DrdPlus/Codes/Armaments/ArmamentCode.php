<?php
namespace DrdPlus\Codes\Armaments;

use DrdPlus\Codes\Code;

interface ArmamentCode extends Code
{
    /**
     * @return bool
     */
    public function isProtectiveArmament();

    /**
     * @return bool
     */
    public function isWeaponlike();

}