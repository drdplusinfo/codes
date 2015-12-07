<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\ProfessionCodes;

class ProfessionCodesTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function I_can_get_all_profession_codes_at_once()
    {
        $this->assertEquals(
            ['fighter', 'wizard', 'priest', 'theurgist', 'ranger', 'thief'],
            ProfessionCodes::getProfessionCodes()
        );
        $this->assertEquals(
            [
                ProfessionCodes::FIGHTER,
                ProfessionCodes::WIZARD,
                ProfessionCodes::PRIEST,
                ProfessionCodes::THEURGIST,
                ProfessionCodes::RANGER,
                ProfessionCodes::THIEF
            ],
            ProfessionCodes::getProfessionCodes()
        );
    }
}
