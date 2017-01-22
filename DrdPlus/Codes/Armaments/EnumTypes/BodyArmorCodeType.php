<?php
namespace DrdPlus\Codes\Armaments\EnumTypes;

use DrdPlus\Codes\Armaments\BodyArmorCode;
use DrdPlus\Codes\EnumTypes\AbstractCodeType;

class BodyArmorCodeType extends AbstractCodeType
{
    const BODY_ARMOR_CODE = 'body_armor_code';

    public static function registerSelf()
    {
        parent::registerSelf();
        static::registerCode(BodyArmorCode::class);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return self::BODY_ARMOR_CODE;
    }

}