<?php
namespace DrdPlus\Codes\Armaments;

interface MeleeWeaponlikeCode extends WeaponlikeCode
{
    /**
     * @return bool
     */
    public function isMeleeWeapon();
}