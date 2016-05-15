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
    public static function getWoundsOriginCodes()
    {
        return [
            self::MECHANICAL,
            self::PSYCHICAL,
            self::ELEMENTAL
        ];
    }

    const MECHANICAL_STAB = 'mechanical_stab';
    const MECHANICAL_CUT = 'mechanical_cut';
    const MECHANICAL_CRUSH = 'mechanical_crush';

    /**
     * @return array|string[]
     */
    public static function getTypeOfMechanicalWoundsCodes()
    {
        return [
            self::MECHANICAL_STAB,
            self::MECHANICAL_CUT,
            self::MECHANICAL_CRUSH
        ];
    }

    /**
     * @return array|string[]
     */
    public static function getOriginAndTypeCodes()
    {
        return [
            self::MECHANICAL_STAB,
            self::MECHANICAL_CUT,
            self::MECHANICAL_CRUSH,
            self::PSYCHICAL,
            self::ELEMENTAL
        ];
    }
}