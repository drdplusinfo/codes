<?php
namespace DrdPlus\Codes\Armaments;

use DrdPlus\Codes\Code;

interface ArmamentCode extends Code
{
    /**
     * Can be used for passive defense (like cover as shield or just lowering wounds as an armor) ?
     *
     * @return bool
     */
    public function isProtectiveArmament();

    /**
     * Can be used for attack directly (projectiles can not) ?
     *
     * @return bool
     */
    public function isWeaponlike();

    /**
     * Can not be used as a solo weapon, therefore has to be used together with another weapon like a bow ?
     *
     * @return bool
     */
    public function isProjectile();

}