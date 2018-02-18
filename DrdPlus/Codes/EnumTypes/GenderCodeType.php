<?php
namespace DrdPlus\Codes\EnumTypes;

use DrdPlus\Codes\GenderCode;

class GenderCodeType extends AbstractCodeType
{
    public const GENDER_CODE = 'gender_code';

    public static function registerSelf(): bool
    {
        parent::registerSelf();

        return static::registerCode(GenderCode::class);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return self::GENDER_CODE;
    }
}