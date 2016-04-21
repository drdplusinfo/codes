<?php
namespace DrdPlus\Codes;

class ActivityDifficultyTypeCodes
{
    const SLEEPING_OR_REST_IN_BED = 'sleeping_or_rest_in_bed';
    const LOUNGING_AND_RESTING = 'lounging_and_resting';
    const LIGHT_ACTIVITY = 'light_activity';
    const NORMAL_ACTIVITY = 'normal_activity';
    const TOILSOME_ACTIVITY = 'toilsome_activity';
    const VERY_HARD_ACTIVITY = 'very_hard_activity';

    /**
     * @return array|string[]
     */
    public static function getActivityTypeCodes()
    {
        return [
            self::SLEEPING_OR_REST_IN_BED,
            self::LOUNGING_AND_RESTING,
            self::LIGHT_ACTIVITY,
            self::NORMAL_ACTIVITY,
            self::TOILSOME_ACTIVITY,
            self::VERY_HARD_ACTIVITY,
        ];
    }
}