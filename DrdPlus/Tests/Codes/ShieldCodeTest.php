<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\ShieldCode;

class ShieldCodeTest extends AbstractCodeTest
{
    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
    {
        self::assertSame(
            $expectedCodes = [
                'buckler',
                'small_shield',
                'medium_shield',
                'heavy_shield',
                'pavise'
            ],
            ShieldCode::getShieldCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }
}
