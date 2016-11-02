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

}