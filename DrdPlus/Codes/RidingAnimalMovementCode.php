<?php
namespace DrdPlus\Codes;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static RidingAnimalMovementCode getIt($codeValue)
 */
class RidingAnimalMovementCode extends AbstractCode
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
    public static function getPossibleValues()
    {
        return [
            self::STILL,
            self::GAIT,
            self::TROT,
            self::CANTER,
            self::GALLOP,
            self::JUMPING,
        ];
    }

}