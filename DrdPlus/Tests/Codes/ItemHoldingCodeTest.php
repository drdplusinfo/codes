<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\ItemHoldingCode;

class ItemHoldingCodeTest extends CodeTest
{
    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
    {
        self::assertSame(
            $expectedValues = ['two_hands', 'main_hand', 'offhand'],
            ItemHoldingCode::getItemHoldingCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedValues);
    }

    /**
     * @test
     * @dataProvider provideHoldingExpectation
     * @param string $holdingValue
     * @param bool $holdsByTwoHands
     * @param bool $holdsByMainHand
     * @param bool $holdsByOffhand
     */
    public function I_can_ask_it_which_holding_easily($holdingValue, $holdsByTwoHands, $holdsByMainHand, $holdsByOffhand)
    {
        $itemHolding = ItemHoldingCode::getIt($holdingValue);
        self::assertSame($itemHolding->holdsByTwoHands(), $holdsByTwoHands);
        self::assertSame($itemHolding->holdsByMainHand(), $holdsByMainHand);
        self::assertSame($itemHolding->holdsByOffhand(), $holdsByOffhand);
    }

    public function provideHoldingExpectation()
    {
        return [
            [ItemHoldingCode::TWO_HANDS, true, false, false],
            [ItemHoldingCode::MAIN_HAND, false, true, false],
            [ItemHoldingCode::OFFHAND, false, false, true],
        ];
    }

}