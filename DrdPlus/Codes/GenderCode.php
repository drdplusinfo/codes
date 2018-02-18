<?php
namespace DrdPlus\Codes;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static GenderCode getIt($codeValue)
 */
class GenderCode extends AbstractCode
{
    public const MALE = 'male';
    public const FEMALE = 'female';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues(): array
    {
        return [self::MALE, self::FEMALE];
    }

    /**
     * @return bool
     */
    public function isMale()
    {
        return $this->getValue() === self::MALE;
    }

    /**
     * @return bool
     */
    public function isFemale()
    {
        return $this->getValue() === self::FEMALE;
    }
}