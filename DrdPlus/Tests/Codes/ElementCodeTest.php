<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\ElementCode;

class ElementCodeTest extends AbstractCodeTest
{
    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
    {
        self::assertSame(
            [
                ElementCode::FIRE,
                ElementCode::WATER,
                ElementCode::EARTH,
                ElementCode::AIR,
            ],
            ElementCode::getElementCodes()
        );
    }
}
