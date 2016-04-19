<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\WoundTypeCodes;

class WoundTypeCodesTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function I_can_get_shield_codes_at_once()
    {
        self::assertSame(
            ['crush', 'stab', 'cut'],
            WoundTypeCodes::getWoundTypeCodes()
        );
        $reflection = new \ReflectionClass('\DrdPlus\Codes\WoundTypeCodes');
        self::assertSame(
            array_values($reflection->getConstants()),
            WoundTypeCodes::getWoundTypeCodes()
        );
    }
}
