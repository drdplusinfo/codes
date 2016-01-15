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
            ['fighter', 'thief', 'ranger', 'wizard', 'theurgist', 'priest'],
            ProfessionCodes::getProfessionCodes()
        );
        $this->assertEquals(
            [
                ProfessionCodes::FIGHTER,
                ProfessionCodes::THIEF,
                ProfessionCodes::RANGER,
                ProfessionCodes::WIZARD,
                ProfessionCodes::THEURGIST,
                ProfessionCodes::PRIEST,
            ],
            ProfessionCodes::getProfessionCodes()
        );
    }
}
