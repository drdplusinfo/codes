<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\GenderCodes;

class GenderCodesTest extends AbstractCodesTableTest
{
    /**
     * @test
     */
    public function I_can_get_all_gender_codes()
    {
        self::assertEquals(
            $expectedCodes = ['male', 'female'],
            GenderCodes::getGenderCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }
}
