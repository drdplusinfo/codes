<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\WoundsOriginCodes;

class WoundsOriginCodesTest extends AbstractCodesTableTest
{
    /**
     * @test
     */
    public function I_can_get_all_wounds_origin_codes_at_once()
    {
        self::assertSame(
            $expectedCodes = [
                'mechanical',
                'psychical',
                'elemental',
            ],
            WoundsOriginCodes::getWoundsOfOriginCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }
}
