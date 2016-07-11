<?php
namespace DrdPlus\Codes;

class MovementTypeCode extends Code
{
    // human-like
    const WALK = 'walk';
    const RUSH = 'rush';
    const RUN = 'run';
    const SPRINT = 'sprint';

    /**
     * @return array|string[]
     */
    public static function getHumanLikeMovementTypeCodes()
    {
        return [
            self::WALK,
            self::RUSH,
            self::RUN,
            self::SPRINT,
        ];
    }

    // riding animals
    const GAIT = 'gait';
    const TROT = 'trot';
    const CANTER = 'canter';
    const GALLOP = 'gallop';

    /**
     * @return array|string[]
     */
    public static function getRidingAnimalMovementTypeCodes()
    {
        return [
            self::GAIT,
            self::TROT,
            self::CANTER,
            self::GALLOP,
        ];
    }

    /**
     * @return array|string[]
     */
    public static function getMovementTypeCodes()
    {
        return array_merge(
            self::getHumanLikeMovementTypeCodes(),
            self::getRidingAnimalMovementTypeCodes()
        );
    }

}