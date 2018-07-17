<?php
declare(strict_types=1); // on PHP 7+ are standard PHP methods strict to types of given parameters

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