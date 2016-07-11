<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\MovementTypeCode;

class MovementTypeCodeTest extends AbstractCodeTest
{
    /**
     * @test
     */
    public function I_can_get_human_like_movement_type_codes()
    {
        self::assertSame(
            [
                'walk',
                'rush',
                'run',
                'sprint'
            ],
            MovementTypeCode::getHumanLikeMovementTypeCodes()
        );
    }

    /**
     * @test
     */
    public function I_can_get_riding_animal_movement_type_codes()
    {
        self::assertSame(
            [
                'gait',
                'trot',
                'canter',
                'gallop'
            ],
            MovementTypeCode::getRidingAnimalMovementTypeCodes()
        );
    }

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
                'sprint',
                'gait',
                'trot',
                'canter',
                'gallop'
            ],
            MovementTypeCode::getMovementTypeCodes()
        );
    }
}
