<?php
namespace DrdPlus\Codes\Body;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static ActivityAffectingHealingCode getIt($codeValue)
 */
class ActivityAffectingHealingCode extends AbstractCode
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
    public static function getPossibleValues(): array
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