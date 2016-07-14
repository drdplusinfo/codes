<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\RidingAnimalPropertyCode;

class RidingAnimalPropertyCodeTest extends AbstractCodeTest
{
    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
    {
        self::assertSame(
            [
                'speed',
                'endurance',
                'maximal_load',
                'maximal_load_in_kg',
                'defiance',
            ],
            RidingAnimalPropertyCode::getRidingAnimalPropertyCodes()
        );
    }

}
