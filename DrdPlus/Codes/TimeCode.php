<?php
namespace DrdPlus\Codes;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static TimeCode getIt($codeValue)
 */
class TimeCode extends AbstractCode
{
    const ROUND = 'round';
    const MINUTE = 'minute';
    const HOUR = 'hour';
    const DAY = 'day';
    const MONTH = 'month';
    const YEAR = 'year';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues()
    {
        return [
            self::ROUND,
            self::MINUTE,
            self::HOUR,
            self::DAY,
            self::MONTH,
            self::YEAR,
        ];
    }
}