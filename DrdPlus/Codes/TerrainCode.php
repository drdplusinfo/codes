<?php
namespace DrdPlus\Codes;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static TerrainCode getIt($codeValue)
 */
class TerrainCode extends AbstractCode
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
    public static function getPossibleValues()
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