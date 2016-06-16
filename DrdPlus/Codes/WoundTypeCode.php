<?php
namespace DrdPlus\Codes;

class WoundTypeCode extends Code
{
    const CRUSH = 'crush';
    const STAB = 'stab';
    const CUT = 'cut';

    /**
     * @return array|string
     */
    public static function getWoundTypeCodes()
    {
        return [
            self::CRUSH,
            self::STAB,
            self::CUT,
        ];
    }
}