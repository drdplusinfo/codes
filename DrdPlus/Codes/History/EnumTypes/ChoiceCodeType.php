<?php
namespace DrdPlus\Codes\History\EnumTypes;

use DrdPlus\Codes\EnumTypes\AbstractCodeType;
use DrdPlus\Codes\History\ChoiceCode;

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