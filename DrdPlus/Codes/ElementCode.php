<?php
namespace DrdPlus\Codes;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static ElementCode getIt($codeValue)
 */
class ElementCode extends AbstractCode
{
    const FIRE = 'fire';
    const WATER = 'water';
    const EARTH = 'earth';
    const AIR = 'air';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues()
    {
        return [
            self::FIRE,
            self::WATER,
            self::EARTH,
            self::AIR,
        ];
    }
}