<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\RidingAnimalMovementCode;

class RidingAnimalMovementCodeTest extends CodeTest
{

    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
    {
        self::assertSame(
            [
                'still',
                'gait',
                'trot',
                'canter',
                'gallop',
                'jumping'
            ],
            RidingAnimalMovementCode::getRidingAnimalMovementCodes()
        );
    }
}
