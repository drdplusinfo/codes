<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\RidingAnimalMovementCode;

class RidingAnimalMovementCodeTest extends AbstractCodeTest
{

    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
    {
        self::assertSame(
            [
                'gait',
                'trot',
                'canter',
                'gallop'
            ],
            RidingAnimalMovementCode::getRidingAnimalMovementCodes()
        );
    }
}
