<?php
namespace DrdPlus\Codes;

class TimeCodes
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
    public static function getTimeCodes()
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