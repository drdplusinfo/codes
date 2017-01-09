<?php
namespace DrdPlus\Codes\EnumTypes;

use DrdPlus\Codes\ChoiceCode;

class ChoiceCodeType extends AbstractCodeType
{
    const CHOICE_CODE = 'choice_code';

    public static function registerSelf()
    {
        parent::registerSelf();
        static::registerCodeAsSubType(ChoiceCode::class);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return self::CHOICE_CODE;
    }
}