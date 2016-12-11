<?php
namespace DrdPlus\Codes;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static MovementTypeCode getIt($codeValue)
 */
class MovementTypeCode extends AbstractCode
{
    const WAITING = 'waiting';
    const WALK = 'walk';
    const RUSH = 'rush';
    const RUN = 'run';
    const SPRINT = 'sprint';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues()
    {
        return [
            self::WAITING,
            self::WALK,
            self::RUSH,
            self::RUN,
            self::SPRINT,
        ];
    }

}