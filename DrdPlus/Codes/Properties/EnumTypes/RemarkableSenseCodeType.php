<?php
namespace DrdPlus\Codes\Properties\EnumTypes;

use DrdPlus\Codes\EnumTypes\CodeType;
use DrdPlus\Codes\Properties\RemarkableSenseCode;

class RemarkableSenseCodeType extends CodeType
{
    const REMARKABLE_SENSE_CODE = 'remarkable_sense_code';

    public static function registerSelf()
    {
        parent::registerSelf();
        static::registerCode(RemarkableSenseCode::class);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return self::REMARKABLE_SENSE_CODE;
    }

}