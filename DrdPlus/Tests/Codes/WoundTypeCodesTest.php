<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\WoundTypeCodes;

class WoundTypeCodesTest extends AbstractCodesTableTest
{
    /**
     * @test
     */
    public function I_can_get_wound_type_codes()
    {
        self::assertSame(
            $expectedCodes = ['crush', 'stab', 'cut'],
            WoundTypeCodes::getWoundTypeCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }
}
