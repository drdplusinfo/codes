<?php
namespace DrdPlus\Codes;

/**
 * @method static GenderCode getIt($codeValue)
 */
class GenderCode extends Code
{
    const MALE = 'male';
    const FEMALE = 'female';

    /**
     * @return array|string[]
     */
    public static function getGenderCodes()
    {
        return [
            self::MALE,
            self::FEMALE,
        ];
    }
}