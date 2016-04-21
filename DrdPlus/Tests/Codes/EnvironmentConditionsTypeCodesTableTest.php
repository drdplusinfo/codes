<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\EnvironmentConditionsTypeCodesTable;

class EnvironmentConditionsTypeCodesTableTest extends AbstractCodesTableTest
{
    /**
     * @test
     */
    public function I_can_get_environment_conditions_type_codes()
    {
        self::assertSame(
            $expectedCodes = [
                'foul_conditions',
                'bad_conditions',
                'impaired_conditions',
                'good_conditions',
            ],
            EnvironmentConditionsTypeCodesTable::getEnvironmentConditionsTypeCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }
}
