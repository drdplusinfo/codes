<?php
namespace DrdPlus\Codes;

class WoundsOriginCodes
{
    const MECHANICAL = 'mechanical';
    const PSYCHICAL = 'psychical';
    const ELEMENTAL = 'elemental';

    /**
     * @return array|string[]
     */
    public static function getWoundsOfOriginCodes()
    {
        return [
            self::MECHANICAL,
            self::PSYCHICAL,
            self::ELEMENTAL
        ];
    }
}