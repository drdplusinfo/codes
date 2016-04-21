<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\ShieldCodes;

class ShieldCodesTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function I_can_get_shield_codes_at_once()
    {
        self::assertSame(
            [
                'buckler',
                'small_shield',
                'medium_shield',
                'heavy_shield',
                'pavise'
            ],
            ShieldCodes::getShieldCodes()
        );
        $shieldCodesReflection = new \ReflectionClass(ShieldCodes::class);
        self::assertSame(
            array_values($shieldCodesReflection->getConstants()),
            ShieldCodes::getShieldCodes()
        );
    }
}
