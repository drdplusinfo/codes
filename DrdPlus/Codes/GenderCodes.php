<?php
namespace DrdPlus\Codes;

class GenderCodes
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