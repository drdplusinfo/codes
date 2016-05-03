<?php
namespace DrdPlus\Codes;

class ElementCodes
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