<?php
namespace DrdPlus\Codes;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static GenderCode getIt($codeValue)
 */
class GenderCode extends AbstractCode
{
    const MALE = 'male';
    const FEMALE = 'female';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues()
    {
        return [
            self::MALE,
            self::FEMALE,
        ];
    }
}