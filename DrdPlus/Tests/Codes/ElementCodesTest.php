<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\ElementCodes;

class ElementCodesTest extends AbstractCodesTest
{
    /**
     * @test
     */
    public function I_can_get_element_codes_at_once()
    {
        self::assertSame(
            [
                ElementCodes::FIRE,
                ElementCodes::WATER,
                ElementCodes::EARTH,
                ElementCodes::AIR,
            ],
            ElementCodes::getElementCodes()
        );
    }
}
