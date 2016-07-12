<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\RidingAnimalCode;

class RidingAnimalCodeTest extends AbstractCodeTest
{
    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
    {
        self::assertSame(
            [
                'horse',
                'draft_horse',
                'riding_horse',
                'war_horse',
                'camel',
                'elephant',
                'yak',
                'lame',
                'donkey',
                'pony',
                'hinny',
                'cow',
                'bull',
                'unicorn'
            ],
            RidingAnimalCode::getRidingAnimalCodes()
        );
    }

}
