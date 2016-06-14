<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\TerrainCodes;

class TerrainCodesTest extends AbstractCodesTest
{
    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
    {
        self::assertSame(
            $expectedCodes = [
                'road',
                'meadow',
                'forest',
                'jungle',
                'swamp',
                'mountains',
                'desert',
                'icy_plains'
            ],
            TerrainCodes::getTerrainCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }
}
