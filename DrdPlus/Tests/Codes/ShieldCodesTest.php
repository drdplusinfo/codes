<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\ShieldCodes;

class ShieldCodesTest extends AbstractCodesTableTest
{
    /**
     * @test
     */
    public function I_can_get_shield_codes()
    {
        self::assertSame(
            $expectedCodes = [
                'buckler',
                'small_shield',
                'medium_shield',
                'heavy_shield',
                'pavise'
            ],
            ShieldCodes::getShieldCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }
}
