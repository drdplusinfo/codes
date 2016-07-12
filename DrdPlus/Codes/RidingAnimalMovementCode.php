<?php
namespace DrdPlus\Codes;

class RidingAnimalMovementCode extends Code
{
    const GAIT = 'gait';
    const TROT = 'trot';
    const CANTER = 'canter';
    const GALLOP = 'gallop';

    /**
     * @return array|string[]
     */
    public static function getRidingAnimalMovementCodes()
    {
        return [
            self::GAIT,
            self::TROT,
            self::CANTER,
            self::GALLOP,
        ];
    }

}