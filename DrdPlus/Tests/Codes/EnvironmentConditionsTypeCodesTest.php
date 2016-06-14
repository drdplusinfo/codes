<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\EnvironmentConditionsTypeCodes;

class EnvironmentConditionsTypeCodesTest extends AbstractCodesTest
{
    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
    {
        self::assertSame(
            $expectedCodes = [
                'foul_conditions',
                'bad_conditions',
                'impaired_conditions',
                'good_conditions',
            ],
            EnvironmentConditionsTypeCodes::getEnvironmentConditionsTypeCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }
}
