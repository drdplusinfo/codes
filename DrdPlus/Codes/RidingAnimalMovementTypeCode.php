<?php
namespace DrdPlus\Codes;

class RidingAnimalMovementTypeCode extends Code
{
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

}