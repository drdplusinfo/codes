<?php
namespace DrdPlus\Codes;

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