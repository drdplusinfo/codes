<?php
namespace DrdPlus\Codes;

/**
 * @method static TerrainCode getIt($codeValue)
 */
class TerrainCode extends Code
{
    const ROAD = 'road';
    const MEADOW = 'meadow';
    const FOREST = 'forest';
    const JUNGLE = 'jungle';
    const SWAMP = 'swamp';
    const MOUNTAINS = 'mountains';
    const DESERT = 'desert';
    const ICY_PLAINS = 'icy_plains';

    /**
     * @return array|string[]
     */
    public static function getTerrainCodes()
    {
        return [
            self::ROAD,
            self::MEADOW,
            self::FOREST,
            self::JUNGLE,
            self::SWAMP,
            self::MOUNTAINS,
            self::DESERT,
            self::ICY_PLAINS,
        ];
    }
}