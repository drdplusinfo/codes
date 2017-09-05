<?php
namespace DrdPlus\Codes;

use DrdPlus\Codes\Partials\TranslatableCode;

/**
 * @method static ItemHoldingCode getIt($codeValue)
 */
class ItemHoldingCode extends TranslatableCode
{
    const TWO_HANDS = 'two_hands';
    const MAIN_HAND = 'main_hand';
    const OFFHAND = 'offhand';

    /**
     * @return array|string[]
     */
    protected static function getDefaultValues(): array
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
    public function holdsByTwoHands(): bool
    {
        return $this->getValue() === self::TWO_HANDS;
    }

    /**
     * @return bool
     */
    public function holdsByMainHand(): bool
    {
        return $this->getValue() === self::MAIN_HAND;
    }

    /**
     * @return bool
     */
    public function holdsByOffhand(): bool
    {
        return $this->getValue() === self::OFFHAND;
    }

    /**
     * @return bool
     */
    public function holdsByOneHand(): bool
    {
        return in_array($this->getValue(), [self::OFFHAND, self::MAIN_HAND], true);
    }

    /**
     * @return ItemHoldingCode
     * @throws \DrdPlus\Codes\Exceptions\ThereIsNoOppositeForTwoHandsHolding
     */
    public function getOpposite(): ItemHoldingCode
    {
        if ($this->holdsByTwoHands()) {
            throw new Exceptions\ThereIsNoOppositeForTwoHandsHolding(
                'Can not make opposite to ' . $this
            );
        }
        if ($this->holdsByMainHand()) {
            return self::getIt(self::OFFHAND);
        }

        return self::getIt(self::MAIN_HAND);
    }

    private static $translations = [
        'en' => [
            self::TWO_HANDS => ['one' => 'two hands'],
            self::MAIN_HAND => ['one' => 'main hand'],
            self::OFFHAND => ['one' => 'offhand'],
        ],
        'cs' => [
            self::TWO_HANDS => ['one' => 'obouručně'],
            self::MAIN_HAND => ['one' => 'v dominantní ruce'],
            self::OFFHAND => ['one' => 'v druhé ruce'],
        ],
    ];

    protected function fetchTranslations(): array
    {
        return self::$translations;
    }

}