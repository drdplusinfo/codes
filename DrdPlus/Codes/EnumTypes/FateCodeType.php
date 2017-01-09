<?php
namespace DrdPlus\Codes\EnumTypes;

use DrdPlus\Codes\FateCode;

class FateCodeType extends AbstractCodeType
{
    const FATE_CODE = 'fate_code';

    public static function registerSelf()
    {
        parent::registerSelf();
        static::registerCodeAsSubType(FateCode::class);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return self::FATE_CODE;
    }
}