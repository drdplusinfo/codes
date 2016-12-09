<?php
namespace DrdPlus\Tests\Codes\Body;

use DrdPlus\Codes\Body\WoundsOriginCode;
use DrdPlus\Tests\Codes\CodeTest;

class WoundsOriginCodeTest extends CodeTest
{
    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
    {
        self::assertSame(
            [
                'psychical',
                'elemental',
                'mechanical_stab',
                'mechanical_cut',
                'mechanical_crush',
            ],
            WoundsOriginCode::getWoundsOriginCodes()
        );
    }

    /**
     * @test
     * @dataProvider provideOriginAndAnswersToType
     * @param string $origin
     * @param bool $isPsychical
     * @param bool $isElemental
     * @param bool $isMechanical
     */
    public function I_can_ask_it_if_is_mechanical($origin, $isPsychical, $isElemental, $isMechanical)
    {
        $woundsOriginCode = WoundsOriginCode::getIt($origin);
        self::assertSame($origin, $woundsOriginCode->getValue());
        self::assertSame($isPsychical, $woundsOriginCode->isPsychical());
        self::assertSame($isElemental, $woundsOriginCode->isElemental());
        self::assertSame($isMechanical, $woundsOriginCode->isMechanical());
    }

    public function provideOriginAndAnswersToType()
    {
        return [
            ['psychical', true, false, false],
            ['elemental', false, true, false],
            ['mechanical_stab', false, false, true],
            ['mechanical_cut', false, false, true],
            ['mechanical_crush', false, false, true],
        ];
    }
}