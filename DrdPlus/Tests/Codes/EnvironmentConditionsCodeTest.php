<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\EnvironmentConditionsCode;

class EnvironmentConditionsCodeTest extends CodeTest
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
            EnvironmentConditionsCode::getEnvironmentConditionsCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }
}
