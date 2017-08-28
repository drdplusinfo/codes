<?php
namespace DrdPlus\Codes\Armaments;

interface ProtectiveArmamentCode extends ArmamentCode
{
    /**
     * @return bool
     */
    public function isArmor(): bool;

    /**
     * @return bool
     */
    public function isShield(): bool;
}