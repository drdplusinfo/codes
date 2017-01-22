<?php
namespace DrdPlus\Codes;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static CombatCharacteristicCode getIt($codeValue)
 */
class CombatCharacteristicCode extends AbstractCode
{
    const ATTACK = 'attack';
    const DEFENSE = 'defense';
    const SHOOTING = 'shooting';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues()
    {
        return [
            self::ATTACK,
            self::DEFENSE,
            self::SHOOTING,
        ];
    }

}