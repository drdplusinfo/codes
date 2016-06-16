<?php
namespace DrdPlus\Codes;

class GenderCode extends Code
{
    const GENDER = 'gender';
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