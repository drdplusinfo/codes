<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\TerrainCode;

class TerrainCodeTest extends AbstractCodeTest
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
            TerrainCode::getTerrainCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }
}
