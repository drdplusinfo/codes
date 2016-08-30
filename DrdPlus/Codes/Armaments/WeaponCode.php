<?php
namespace DrdPlus\Codes\Armaments;

abstract class WeaponCode extends WeaponlikeCode
{
    /**
     * @return bool
     */
    public function isShield()
    {
        return false;
    }

}