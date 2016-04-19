<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\ArmorCodes;

class ArmorCodesTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function I_can_get_armor_codes_at_once()
    {
        self::assertSame(
            [
                'without_armor',
                'padded_armor',
                'leather_armor',
                'hobnailed_armor',
                'chainmail',
                'scale_armor',
                'plate_armor',
                'full_plate_armor',
            ],
            ArmorCodes::getBodyArmorCodes()
        );
    }

    /**
     * @test
     */
    public function I_can_get_helm_codes_at_once()
    {
        self::assertSame(
            [
                'without_helm',
                'leather_cap',
                'chainmail_hood',
                'conical_helm',
                'full_helm',
                'barrel_helm',
                'great_helm',
            ],
            ArmorCodes::getHelmCodes()
        );
    }
}
