<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\PropertyCodes;

class PropertyCodesTest extends AbstractCodesTest
{
    /**
     * @test
     */
    public function I_can_get_base_property_codes()
    {
        self::assertEquals(
            $expectedCodes = [
                'strength',
                'agility',
                'knack',
                'will',
                'intelligence',
                'charisma'
            ],
            PropertyCodes::getBasePropertyCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }
}
