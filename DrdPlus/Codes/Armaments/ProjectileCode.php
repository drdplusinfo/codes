<?php
namespace DrdPlus\Codes\Armaments;

use DrdPlus\Codes\Partials\AbstractCode;

abstract class ProjectileCode extends AbstractCode implements ArmamentCode
{
    /**
     * @return bool
     */
    public function isProtectiveArmament()
    {
        return false;
    }

    /**
     * @return bool
     */
    public function isWeaponlike()
    {
        return false;
    }

    /**
     * @return bool
     */
    public function isProjectile()
    {
        return true;
    }

    /**
     * @return bool
     */
    abstract public function isArrow();

    /**
     * @return bool
     */
    abstract public function isDart();

    /**
     * @return bool
     */
    abstract public function isSlingStone();
}