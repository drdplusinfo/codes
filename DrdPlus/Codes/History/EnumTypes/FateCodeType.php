<?php
namespace DrdPlus\Codes\History\EnumTypes;

use DrdPlus\Codes\EnumTypes\AbstractCodeType;
use DrdPlus\Codes\History\FateCode;

class FateCodeType extends AbstractCodeType
{
    const FATE_CODE = 'fate_code';

    public static function registerSelf(): bool
    {
        parent::registerSelf();

        return static::registerCode(FateCode::class);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return self::FATE_CODE;
    }
}