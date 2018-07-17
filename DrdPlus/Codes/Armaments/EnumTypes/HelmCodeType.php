<?php
declare(strict_types=1); // on PHP 7+ are standard PHP methods strict to types of given parameters

namespace DrdPlus\Codes\Armaments\EnumTypes;

use DrdPlus\Codes\Armaments\HelmCode;
use DrdPlus\Codes\EnumTypes\AbstractCodeType;

class HelmCodeType extends AbstractCodeType
{
    public const HELM_CODE = 'helm_code';

    public static function registerSelf(): bool
    {
        parent::registerSelf();

        return static::registerCodeAsSubTypeEnum(HelmCode::class);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return self::HELM_CODE;
    }

}