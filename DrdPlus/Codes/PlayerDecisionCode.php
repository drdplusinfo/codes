<?php
namespace DrdPlus\Codes;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static PlayerDecisionCode getIt($codeValue)
 */
class PlayerDecisionCode extends AbstractCode
{
    const EXCEPTIONAL_PROPERTIES = 'exceptional_properties';
    const COMBINATION_OF_PROPERTIES_AND_BACKGROUND = 'combination_of_properties_and_background';
    const GOOD_REAR = 'good_rear';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues()
    {
        return [
            self::EXCEPTIONAL_PROPERTIES,
            self::COMBINATION_OF_PROPERTIES_AND_BACKGROUND,
            self::GOOD_REAR,
        ];
    }

}