<?php
namespace DrdPlus\Codes;

/**
 * @method static RidingAnimalPropertyCode getIt($codeValue)
 */
class RidingAnimalPropertyCode extends Code
{
    const SPEED = PropertyCode::SPEED;
    const ENDURANCE = PropertyCode::ENDURANCE;
    const MAXIMAL_LOAD = PropertyCode::MAXIMAL_LOAD;
    const MAXIMAL_LOAD_IN_KG = 'maximal_load_in_kg';
    const DEFIANCE = 'defiance';

    /**
     * @return array|string[]
     */
    public static function getRidingAnimalPropertyCodes()
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
