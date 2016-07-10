<?php
namespace DrdPlus\Codes;

class EnvironmentConditionsCode extends Code
{
    const FOUL_CONDITIONS = 'foul_conditions';
    const BAD_CONDITIONS = 'bad_conditions';
    const IMPAIRED_CONDITIONS = 'impaired_conditions';
    const GOOD_CONDITIONS = 'good_conditions';

    /**
     * @return array|string[]
     */
    public static function getEnvironmentConditionsCodes()
    {
        return [
            self::FOUL_CONDITIONS,
            self::BAD_CONDITIONS,
            self::IMPAIRED_CONDITIONS,
            self::GOOD_CONDITIONS,
        ];
    }
}