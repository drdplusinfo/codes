<?php
namespace DrdPlus\Codes\EnumTypes;

use DrdPlus\Codes\GenderCode;

class GenderCodeType extends AbstractCodeType
{
    const GENDER_CODE = 'gender_code';

    public static function registerSelf()
    {
        parent::registerSelf();
        static::registerCode(GenderCode::class);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return self::GENDER_CODE;
    }
}