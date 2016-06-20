<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\TimeCode;

class TimeCodeTest extends AbstractCodeTest
{
    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
    {
        self::assertEquals(
            $expectedCodes = [
                'round',
                'minute',
                'hour',
                'day',
                'month',
                'year'
            ],
            TimeCode::getTimeCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }
}
