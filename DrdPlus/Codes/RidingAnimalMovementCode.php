<?php
namespace DrdPlus\Codes;

/**
 * @method static RidingAnimalMovementCode getIt($codeValue)
 */
class RidingAnimalMovementCode extends Code
{
    const STILL = 'still';
    const GAIT = 'gait';
    const TROT = 'trot';
    const CANTER = 'canter';
    const GALLOP = 'gallop';
    const JUMPING = 'jumping';

    /**
     * @return array|string[]
     */
    public static function getRidingAnimalMovementCodes()
    {
        return [
            self::STILL,
            self::GAIT,
            self::TROT,
            self::CANTER,
            self::GALLOP,
            self::JUMPING
        ];
    }

}