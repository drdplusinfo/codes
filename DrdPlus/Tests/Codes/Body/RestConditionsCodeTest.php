<?php
namespace DrdPlus\Tests\Codes\Body;

use DrdPlus\Codes\Body\RestConditionsCode;
use DrdPlus\Tests\Codes\CodeTest;

class RestConditionsCodeTest extends CodeTest
{
    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
    {
        self::assertSame(
            $expectedCodes = [
                'half_time_of_rest_or_sleep',
                'quarter_time_of_rest_or_sleep',
                'foul_conditions',
                'bad_conditions',
                'impaired_conditions',
                'good_conditions',
            ],
            RestConditionsCode::getRestConditionsCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }
}