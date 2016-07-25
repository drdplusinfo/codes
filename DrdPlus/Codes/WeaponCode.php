<?php
namespace DrdPlus\Codes;

/**
 * @method static WeaponCode getIt($code)
 */
abstract class WeaponCode extends ArmamentCode
{

    /**
     * @return bool
     */
    abstract public function isMeleeWeapon();

    /**
     * @return bool
     */
    abstract public function isRangeWeapon();
}