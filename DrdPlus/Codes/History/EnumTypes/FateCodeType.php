<?php
declare(strict_types=1); // on PHP 7+ are standard PHP methods strict to types of given parameters

namespace DrdPlus\Codes\History\EnumTypes;

use DrdPlus\Codes\EnumTypes\AbstractCodeType;
use DrdPlus\Codes\History\FateCode;

class FateCodeType extends AbstractCodeType
{
    public const FATE_CODE = 'fate_code';

    public static function registerSelf(): bool
    {
        parent::registerSelf();

        return static::registerCodeAsSubTypeEnum(FateCode::class);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return self::FATE_CODE;
    }
}