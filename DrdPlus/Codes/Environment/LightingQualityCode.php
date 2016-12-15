<?php
namespace DrdPlus\Codes\Environment;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static LightingQualityCode getIt($codeValue)
 */
class LightingQualityCode extends AbstractCode
{
    const DARK = 'dark';
    const CLOUDY_STAR_NIGHT = 'cloudy_star_night';
    const STAR_NIGHT = 'star_night';
    const FULL_MOON_NIGHT = 'full_moon_night';
    const SUNSET = 'sunset';
    const VERY_CLOUDY = 'very_cloudy';
    const CLOUDY = 'cloudy';
    const DAYLIGHT = 'daylight';
    const STRONG_DAYLIGHT = 'strong_daylight';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues()
    {
        return [
            self::DARK,
            self::CLOUDY_STAR_NIGHT,
            self::STAR_NIGHT,
            self::FULL_MOON_NIGHT,
            self::SUNSET,
            self::VERY_CLOUDY,
            self::CLOUDY,
            self::DAYLIGHT,
            self::STRONG_DAYLIGHT,
        ];
    }

}