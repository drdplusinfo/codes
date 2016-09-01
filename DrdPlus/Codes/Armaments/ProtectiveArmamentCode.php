<?php
namespace DrdPlus\Codes\Armaments;

interface ProtectiveArmamentCode extends ArmamentCode
{
    /**
     * @return bool
     */
    public function isArmor();

    /**
     * @return bool
     */
    public function isShield();
}