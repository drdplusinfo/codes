<?php
namespace DrdPlus\Codes;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static ActivityIntensityCode getIt($codeValue)
 */
class ActivityIntensityCode extends AbstractCode
{
    const AUTOMATIC_ACTIVITY = 'automatic_activity';
    const ACTIVITY_WITH_MODERATE_CONCENTRATION = 'activity_with_moderate_concentration';
    const ACTIVITY_WITH_FULL_CONCENTRATION = 'activity_with_full_concentration';
    const TRANS = 'trans';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues()
    {
        return [
            self::AUTOMATIC_ACTIVITY,
            self::ACTIVITY_WITH_MODERATE_CONCENTRATION,
            self::ACTIVITY_WITH_FULL_CONCENTRATION,
            self::TRANS,
        ];
    }

}