<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\RaceCode;

class RaceCodeTest extends CodeTest
{
    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
    {
        self::assertEquals(
            $expectedCodes = [
                'human',
                'elf',
                'dwarf',
                'hobbit',
                'kroll',
                'orc',
            ],
            RaceCode::getRaceCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }

}
