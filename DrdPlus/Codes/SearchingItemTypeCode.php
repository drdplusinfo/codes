<?php
namespace DrdPlus\Codes;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static SearchingItemTypeCode getIt($codeValue)
 */
class SearchingItemTypeCode extends AbstractCode
{
    const SEARCHING_SAME_TYPE_ITEM = 'searching_same_type_item';
    const JUST_SEARCHING = 'just_searching';
    const SEARCHING_DIFFERENT_TYPE_ITEM = 'searching_different_type_item';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues()
    {
        return [
            self::SEARCHING_SAME_TYPE_ITEM,
            self::JUST_SEARCHING,
            self::SEARCHING_DIFFERENT_TYPE_ITEM,
        ];
    }

}