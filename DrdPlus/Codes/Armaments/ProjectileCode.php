<?php
namespace DrdPlus\Codes\Armaments;

use DrdPlus\Codes\Partials\AbstractCode;

abstract class ProjectileCode extends AbstractCode implements ArmamentCode
{
    /**
     * @return bool
     */
    public function isProtectiveArmament(): bool
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

    /**
     * @return bool
     */
    final public function isProjectile(): bool
    {
        return true;
    }

    /**
     * @return bool
     */
    abstract public function isArrow(): bool;

    /**
     * @return bool
     */
    abstract public function isDart(): bool;

    /**
     * @return bool
     */
    abstract public function isSlingStone(): bool;
}