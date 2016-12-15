<?php
namespace DrdPlus\Codes\Transport;

use DrdPlus\Codes\Partials\AbstractCode;
use DrdPlus\Codes\PropertyCode;

/**
 * @method static RidingAnimalPropertyCode getIt($codeValue)
 */
class RidingAnimalPropertyCode extends AbstractCode
{
    const SPEED = PropertyCode::SPEED;
    const ENDURANCE = PropertyCode::ENDURANCE;
    const MAXIMAL_LOAD = PropertyCode::MAXIMAL_LOAD;
    const MAXIMAL_LOAD_IN_KG = 'maximal_load_in_kg';
    const DEFIANCE = 'defiance';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues()
    {
        return [
            self::SPEED,
            self::ENDURANCE,
            self::MAXIMAL_LOAD,
            self::MAXIMAL_LOAD_IN_KG,
            self::DEFIANCE,
        ];
    }
}