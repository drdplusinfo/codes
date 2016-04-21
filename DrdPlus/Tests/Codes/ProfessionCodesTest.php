<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\ProfessionCodes;

class ProfessionCodesTest extends AbstractCodesTableTest
{
    /**
     * @test
     */
    public function I_can_get_all_profession_codes()
    {
        self::assertEquals(
            $expectedCodes = ['fighter', 'thief', 'ranger', 'wizard', 'theurgist', 'priest'],
            ProfessionCodes::getProfessionCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }
}
