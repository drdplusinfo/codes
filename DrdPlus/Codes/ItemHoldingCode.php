<?php
namespace DrdPlus\Codes;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static ItemHoldingCode getIt($codeValue)
 */
class ItemHoldingCode extends AbstractCode
{
    const TWO_HANDS = 'two_hands';
    const MAIN_HAND = 'main_hand';
    const OFFHAND = 'offhand';

    /**
     * @return array|string[]
     */
    public static function getItemHoldingCodes()
    {
        return [
            self::TWO_HANDS,
            self::MAIN_HAND,
            self::OFFHAND
        ];
    }
}