<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\WoundsOriginCodes;

class WoundsOriginCodesTest extends AbstractCodesTableTest
{
    /**
     * @test
     */
    public function I_can_get_all_wounds_origin_codes_at_once()
    {
        self::assertSame(
            $this->getExpectedWoundsOriginCodes(),
            WoundsOriginCodes::getWoundsOriginCodes()
        );
    }

    private function getExpectedWoundsOriginCodes()
    {
        return [
            'mechanical',
            'psychical',
            'elemental',
        ];
    }

    /**
     * @test
     */
    public function I_can_get_type_of_mechanical_wounds_codes_at_once()
    {
        self::assertSame(
            $this->getExpectedTypeOfMechanicalWoundsCodes(),
            WoundsOriginCodes::getTypeOfMechanicalWoundsCodes()
        );
    }

    private function getExpectedTypeOfMechanicalWoundsCodes()
    {
        return [
            'mechanical_stab',
            'mechanical_cut',
            'mechanical_crush',
        ];
    }

    /**
     * @test
     * @dataProvider provideAllExpectedCodes
     * @param array $expectedCodes
     */
    public function I_can_get_codes_by_same_named_constants(array $expectedCodes)
    {
        parent::I_can_get_codes_by_same_named_constants($expectedCodes);
    }

    public function provideAllExpectedCodes()
    {
        return [
            [
                array_merge(
                    $this->getExpectedWoundsOriginCodes(),
                    $this->getExpectedTypeOfMechanicalWoundsCodes()
                )
            ]
        ];
    }

    /**
     * @test
     */
    public function I_can_get_origins_with_type_codes_at_once()
    {
        self::assertSame(
            array_merge(
                $this->getExpectedTypeOfMechanicalWoundsCodes(),
                array_filter(
                    $this->getExpectedWoundsOriginCodes(),
                    function ($woundsOriginCode) {
                        return $woundsOriginCode !== 'mechanical';
                    }
                )
            ),
            WoundsOriginCodes::getOriginAndTypeCodes()
        );
    }
}
