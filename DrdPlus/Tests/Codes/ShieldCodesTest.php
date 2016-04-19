<?php
namespace DrdPlus\Codes;

class ShieldCodesTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function I_can_get_shield_codes_at_once()
    {
        $reflection = new \ReflectionClass(ShieldCodes::class);
        self::assertSame(
            array_values($reflection->getConstants()),
            ShieldCodes::getShieldCodes()
        );
    }
}
