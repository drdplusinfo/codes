<?php
namespace DrdPlus\Codes\History;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static FateCode getIt($codeValue)
 */
class FateCode extends AbstractCode
{
    const EXCEPTIONAL_PROPERTIES = 'exceptional_properties';
    const COMBINATION_OF_PROPERTIES_AND_BACKGROUND = 'combination_of_properties_and_background';
    const GOOD_BACKGROUND = 'good_background';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues()
    {
        return [
            self::EXCEPTIONAL_PROPERTIES,
            self::COMBINATION_OF_PROPERTIES_AND_BACKGROUND,
            self::GOOD_BACKGROUND,
        ];
    }

}