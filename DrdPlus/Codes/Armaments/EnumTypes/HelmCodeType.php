<?php
namespace DrdPlus\Codes\Armaments\EnumTypes;

use DrdPlus\Codes\Armaments\HelmCode;
use DrdPlus\Codes\EnumTypes\AbstractCodeType;

class HelmCodeType extends AbstractCodeType
{
    const HELM_CODE = 'helm_code';

    public static function registerSelf()
    {
        parent::registerSelf();
        static::registerCode(HelmCode::class);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return self::HELM_CODE;
    }

}