<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\WoundsOriginCodes;

class WoundsOriginCodesTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function I_can_get_all_wounds_origin_codes_at_once()
    {
        self::assertSame(
            [
                'mechanical',
                'psychical',
                'elemental',
            ],
            WoundsOriginCodes::getWoundsOfOriginCodes()
        );

        $reflection = new \ReflectionClass(WoundsOriginCodes::class);
        self::assertSame(array_values($reflection->getConstants()), WoundsOriginCodes::getWoundsOfOriginCodes());
        foreach ($reflection->getConstants() as $constantName => $constantValue) {
            self::assertSame(strtolower($constantName), $constantValue);
        }
    }
}
