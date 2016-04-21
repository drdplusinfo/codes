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
                'chainmail_armor',
                'scale_armor',
                'plate_armor',
                'full_plate_armor',
            ],
            ArmorCodes::getBodyArmorCodes()
        );
        $bodyArmorCodesReflection = new \ReflectionClass(ArmorCodes::class);
        self::assertSame(
            array_values( // re-setting indexes
                array_filter(
                    array_values($bodyArmorCodesReflection->getConstants()),
                    function ($code) {
                        return strpos($code, 'armor') !== false;
                    }
                )
            ),
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
        $bodyArmorCodesReflection = new \ReflectionClass(ArmorCodes::class);
        self::assertSame(
            array_values( // re-setting indexes
                array_filter(
                    array_values($bodyArmorCodesReflection->getConstants()),
                    function ($code) {
                        return
                            strpos($code, 'helm') !== false
                            || strpos($code, 'cap') !== false
                            || strpos($code, 'hood') !== false;
                    }
                )
            ),
            ArmorCodes::getHelmCodes()
        );
    }
}
