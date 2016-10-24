<?php
namespace DrdPlus\Tests\Codes\Armaments;

use DrdPlus\Codes\Armaments\ArrowCode;

class ArrowCodeTest extends ProjectileCodeTest
{
    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
{
    self::assertSame(
        $expectedValues = [
            'basic_arrow',
            'long_range_arrow',
            'war_arrow',
            'piercing_arrow',
            'hollow_arrow',
            'crippling_arrow',
            'incendiary_arrow',
            'silver_arrow',
        ],
        ArrowCode::getArrowCodes()
    );
    $this->I_can_get_codes_by_same_named_constants($expectedValues);
}

    /**
     * @test
     */
    public function I_can_find_out_if_is_arrow()
{
    self::assertTrue(ArrowCode::getIt(ArrowCode::CRIPPLING_ARROW)->isArrow());
}

    /**
     * @test
     */
    public function I_can_find_out_if_is_dart()
{
    self::assertFalse(ArrowCode::getIt(ArrowCode::INCENDIARY_ARROW)->isDart());
}

    /**
     * @test
     */
    public function I_can_find_out_if_is_sling_stone()
{
    self::assertFalse(ArrowCode::getIt(ArrowCode::LONG_RANGE_ARROW)->isSlingStone());
}

}