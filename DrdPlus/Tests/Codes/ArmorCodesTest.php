<?php
namespace DrdPlus\Codes;

class ArmorCodesTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function I_can_get_armor_codes_at_once()
    {
        $reflection = new \ReflectionClass(ArmorCodes::class);

        self::assertSame(
            array_values($reflection->getConstants()),
            ArmorCodes::getArmorCodes()
        );
    }
}
