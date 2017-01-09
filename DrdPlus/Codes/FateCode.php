<?php
namespace DrdPlus\Codes;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static FateCode getIt($codeValue)
 */
class FateCode extends AbstractCode
{
    const FATE_OF_EXCEPTIONAL_PROPERTIES = 'fate_of_exceptional_properties';
    const FATE_OF_COMBINATION = 'fate_of_combination';
    const FATE_OF_GOOD_REAR = 'fate_of_good_rear';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues()
    {
        return [
            self::FATE_OF_EXCEPTIONAL_PROPERTIES,
            self::FATE_OF_COMBINATION,
            self::FATE_OF_GOOD_REAR,
        ];
    }
}