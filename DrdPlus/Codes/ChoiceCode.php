<?php
namespace DrdPlus\Codes;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static ChoiceCode getIt($codeValue)
 */
class ChoiceCode extends AbstractCode
{
    const FORTUNE = 'fortune';
    const PLAYER_DECISION = 'player_decision';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues()
    {
        return [
            self::FORTUNE,
            self::PLAYER_DECISION,
        ];
    }
}