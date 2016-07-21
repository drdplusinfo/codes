<?php
namespace DrdPlus\Codes;

/**
 * @method static ArmorCode getIt($code)
 */
abstract class ArmorCode extends ArmamentCode
{
    /**
     * @return bool
     */
    abstract public function isHelm();

    /**
     * @return bool
     */
    abstract public function isBodyArmor();
}