<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\ItemHoldingCode;

class ItemHoldingCodeTest extends AbstractCodeTest
{
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
        self::assertSame($itemHolding->holdsByOneHand(), !$holdsByTwoHands);
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