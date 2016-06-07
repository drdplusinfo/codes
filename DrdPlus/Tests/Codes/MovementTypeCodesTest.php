<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\MovementTypeCodes;

class MovementTypeCodesTest extends AbstractCodesTest
{
    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
    {
        self::assertSame(
            [
                'walk',
                'rush',
                'run',
                'sprint'
            ],
            MovementTypeCodes::getMovementTypCodes()
        );
    }
}
