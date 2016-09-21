<?php
namespace DrdPlus\Codes;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static WoundTypeCode getIt($codeValue)
 */
class WoundTypeCode extends AbstractCode
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