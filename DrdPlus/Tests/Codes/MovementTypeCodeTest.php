<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\MovementTypeCode;

class MovementTypeCodeTest extends CodeTest
{
    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
    {
        self::assertSame(
            [
                'waiting',
                'walk',
                'rush',
                'run',
                'sprint'
            ],
            MovementTypeCode::getMovementTypeCodes()
        );
    }
}
