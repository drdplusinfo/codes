<?php
namespace DrdPlus\Codes\Armaments;

use DrdPlus\Codes\Partials\AbstractCode;

abstract class ArmorCode extends AbstractCode implements ProtectiveArmamentCode
{
    /**
     * @return bool
     */
    abstract public function isHelm(): bool;

    /**
     * @return bool
     */
    abstract public function isBodyArmor(): bool;

    /**
     * @return bool
     */
    public function isProtectiveArmament(): bool
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isProjectile(): bool
    {
        return false;
    }

    /**
     * @return bool
     */
    public function isArmor(): bool
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isShield(): bool
    {
        return false;
    }

    /**
     * @return bool
     */
    public function isWeaponlike(): bool
    {
        return false;
    }

}