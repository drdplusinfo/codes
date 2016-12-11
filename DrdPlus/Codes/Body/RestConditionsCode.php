<?php
namespace DrdPlus\Codes\Body;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static RestConditionsCode getIt($codeValue)
 */
class RestConditionsCode extends AbstractCode
{
    const HALF_TIME_OF_REST_OR_SLEEP = 'half_time_of_rest_or_sleep';
    const QUARTER_TIME_OF_REST_OR_SLEEP = 'quarter_time_of_rest_or_sleep';
    const FOUL_CONDITIONS = ConditionsAffectingHealingCode::FOUL_CONDITIONS;
    const BAD_CONDITIONS = ConditionsAffectingHealingCode::BAD_CONDITIONS;
    const IMPAIRED_CONDITIONS = ConditionsAffectingHealingCode::IMPAIRED_CONDITIONS;
    const GOOD_CONDITIONS = ConditionsAffectingHealingCode::GOOD_CONDITIONS;

    /**
     * @return array|string[]
     */
    public static function getPossibleValues()
    {
        return [
            self::HALF_TIME_OF_REST_OR_SLEEP,
            self::QUARTER_TIME_OF_REST_OR_SLEEP,
            self::FOUL_CONDITIONS,
            self::BAD_CONDITIONS,
            self::IMPAIRED_CONDITIONS,
            self::GOOD_CONDITIONS,
        ];
    }
}