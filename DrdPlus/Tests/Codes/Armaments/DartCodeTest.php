<?php
namespace DrdPlus\Tests\Codes\Armaments;

use DrdPlus\Codes\Armaments\DartCode;

class DartCodeTest extends ProjectileCodeTest
{
    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
    {
        self::assertSame(
            $expectedValues = ['basic_dart', 'war_dart', 'piercing_dart', 'hollow_dart', 'silver_dart'],
            DartCode::getDartCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedValues);
    }

    /**
     * @test
     */
    public function I_can_find_out_if_is_arrow()
    {
        self::assertFalse(DartCode::getIt(DartCode::HOLLOW_DART)->isArrow());
    }

    /**
     * @test
     */
    public function I_can_find_out_if_is_dart()
    {
        self::assertTrue(DartCode::getIt(DartCode::SILVER_DART)->isDart());
    }

    /**
     * @test
     */
    public function I_can_find_out_if_is_sling_stone()
    {
        self::assertFalse(DartCode::getIt(DartCode::WAR_DART)->isSlingStone());
    }

}