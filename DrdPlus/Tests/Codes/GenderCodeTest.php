<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\GenderCode;

class GenderCodeTest extends CodeTest
{
    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
    {
        self::assertEquals(
            $expectedCodes = ['male', 'female'],
            GenderCode::getGenderCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }
}
