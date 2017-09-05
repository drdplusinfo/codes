<?php
namespace DrdPlus\Tests\Codes\Body;

use DrdPlus\Codes\Body\WoundTypeCode;
use DrdPlus\Tests\Codes\Partials\TranslatableCodeTest;

class WoundTypeCodeTest extends TranslatableCodeTest
{
    /**
     * @test
     * @dataProvider provideType
     * @param string $value
     * @param bool $isCrush
     * @param bool $isStab
     * @param bool $isCut
     */
    public function I_can_ask_it_for_type($value, $isCrush, $isStab, $isCut)
    {
        $woundTypeCode = WoundTypeCode::getIt($value);
        self::assertSame($isCrush, $woundTypeCode->isCrush());
        self::assertSame($isStab, $woundTypeCode->isStab());
        self::assertSame($isCut, $woundTypeCode->isCut());
    }

    public function provideType()
    {
        return [
            [WoundTypeCode::CRUSH, true, false, false],
            [WoundTypeCode::STAB, false, true, false],
            [WoundTypeCode::CUT, false, false, true],
        ];
    }
}