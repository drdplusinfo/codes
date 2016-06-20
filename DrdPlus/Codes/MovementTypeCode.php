<?php
namespace DrdPlus\Codes;

class MovementTypeCode extends Code
{
    const WALK = 'walk';
    const RUSH = 'rush';
    const RUN = 'run';
    const SPRINT = 'sprint';

    /**
     * @return array|string[]
     */
    public static function getMovementTypeCodes()
    {
        return [
            self::WALK,
            self::RUSH,
            self::RUN,
            self::SPRINT,
        ];
    }
}