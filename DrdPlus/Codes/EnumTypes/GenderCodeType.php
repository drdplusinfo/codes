<?php
namespace DrdPlus\Codes\EnumTypes;

use DrdPlus\Codes\GenderCode;

class GenderCodeType extends AbstractCodeType
{
    const GENDER_CODE = 'gender_code';

    public static function registerSelf()
    {
        parent::registerSelf();
        static::registerCodeAsSubType(GenderCode::getIt(GenderCode::FEMALE) /* any gender - just need an instance */);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return self::GENDER_CODE;
    }
}