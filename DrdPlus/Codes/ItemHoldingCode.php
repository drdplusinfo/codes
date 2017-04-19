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
    public static function getPossibleValues(): array
    {
        return [
            self::TWO_HANDS,
            self::MAIN_HAND,
            self::OFFHAND,
        ];
    }

    /**
     * @return bool
     */
    public function holdsByTwoHands()
    {
        return $this->getValue() === self::TWO_HANDS;
    }

    /**
     * @return bool
     */
    public function holdsByMainHand()
    {
        return $this->getValue() === self::MAIN_HAND;
    }

    /**
     * @return bool
     */
    public function holdsByOffhand()
    {
        return $this->getValue() === self::OFFHAND;
    }

    /**
     * @return bool
     */
    public function holdsByOneHand()
    {
        return in_array($this->getValue(), [self::OFFHAND, self::MAIN_HAND], true);
    }

}