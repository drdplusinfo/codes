<?php
namespace DrdPlus\Codes;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static FoodTypeCode getIt($codeValue)
 */
class FoodTypeCode extends AbstractCode
{
    const CROP_COLLECTION = 'crop_collection';
    const INSECTS_OR_WORMS = 'insects_or_worms';
    const SLUGS = 'slugs';
    const REPTILES = 'reptiles';
    const RODENTS_OR_BIRDS_EGGS = 'rodents_or_birds_eggs';
    const AVERAGE_MEAT = 'average_meat';
    const QUALITY_MEAT = 'quality_meat';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues()
    {
        return [
            self::CROP_COLLECTION,
            self::INSECTS_OR_WORMS,
            self::SLUGS,
            self::REPTILES,
            self::RODENTS_OR_BIRDS_EGGS,
            self::AVERAGE_MEAT,
            self::QUALITY_MEAT,
        ];
    }

}