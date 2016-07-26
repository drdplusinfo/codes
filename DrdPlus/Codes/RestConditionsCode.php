<?php
namespace DrdPlus\Codes;

/**
 * @method static RestConditionsCode getIt($codeValue)
 */
class RestConditionsCode extends Code
{
    const HALF_TIME_OF_REST_OR_SLEEP = 'half_time_of_rest_or_sleep';
    const QUARTER_TIME_OF_REST_OR_SLEEP = 'quarter_time_of_rest_or_sleep';
    const FOUL_CONDITIONS = EnvironmentConditionsCode::FOUL_CONDITIONS;
    const BAD_CONDITIONS = EnvironmentConditionsCode::BAD_CONDITIONS;
    const IMPAIRED_CONDITIONS = EnvironmentConditionsCode::IMPAIRED_CONDITIONS;
    const GOOD_CONDITIONS = EnvironmentConditionsCode::GOOD_CONDITIONS;

    /**
     * @return array|string[]
     */
    public static function getRestConditionsCodes()
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