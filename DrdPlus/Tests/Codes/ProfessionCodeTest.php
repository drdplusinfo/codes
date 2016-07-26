<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\ProfessionCode;

class ProfessionCodeTest extends CodeTest
{
    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
    {
        self::assertEquals(
            $expectedCodes = ['fighter', 'thief', 'ranger', 'wizard', 'theurgist', 'priest'],
            ProfessionCode::getProfessionCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }
}
