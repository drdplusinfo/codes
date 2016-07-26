<?php
namespace DrdPlus\Codes;

/**
 * @method static ElementCode getIt($codeValue)
 */
class ElementCode extends Code
{
    const FIRE = 'fire';
    const WATER = 'water';
    const EARTH = 'earth';
    const AIR = 'air';

    /**
     * @return array|string[]
     */
    public static function getElementCodes()
    {
        return [
            self::FIRE,
            self::WATER,
            self::EARTH,
            self::AIR,
        ];
    }
}