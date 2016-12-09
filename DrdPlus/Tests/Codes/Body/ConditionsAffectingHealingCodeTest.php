<?php
namespace DrdPlus\Tests\Codes\Body;

use DrdPlus\Codes\Body\ConditionsAffectingHealingCode;
use DrdPlus\Tests\Codes\CodeTest;

class ConditionsAffectingHealingCodeTest extends CodeTest
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
            ConditionsAffectingHealingCode::getConditionsAffectingHealingCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }
}