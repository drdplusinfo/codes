<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\WoundTypeCode;

class WoundTypeCodeTest extends CodeTest
{
    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
    {
        self::assertSame(
            $expectedCodes = ['crush', 'stab', 'cut'],
            WoundTypeCode::getWoundTypeCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }

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
