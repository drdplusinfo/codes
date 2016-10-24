<?php
namespace DrdPlus\Tests\Codes\Armaments;

use DrdPlus\Codes\Armaments\SlingStoneCode;

class SlingStoneCodeTest extends ProjectileCodeTest
{
    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
    {
        self::assertSame(
            $expectedValues = ['sling_stone_light', 'sling_stone_heavier'],
            SlingStoneCode::getSlingStoneCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedValues);
    }

    /**
     * @test
     */
    public function I_can_find_out_if_is_arrow()
    {
        self::assertFalse(SlingStoneCode::getIt(SlingStoneCode::SLING_STONE_HEAVIER)->isArrow());
    }

    /**
     * @test
     */
    public function I_can_find_out_if_is_dart()
    {
        self::assertFalse(SlingStoneCode::getIt(SlingStoneCode::SLING_STONE_LIGHT)->isDart());
    }

    /**
     * @test
     */
    public function I_can_find_out_if_is_sling_stone()
    {
        self::assertTrue(SlingStoneCode::getIt(SlingStoneCode::SLING_STONE_HEAVIER)->isSlingStone());
    }

}