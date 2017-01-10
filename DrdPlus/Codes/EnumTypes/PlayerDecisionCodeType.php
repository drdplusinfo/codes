<?php
namespace DrdPlus\Codes\EnumTypes;

use DrdPlus\Codes\PlayerDecisionCode;

class PlayerDecisionCodeType extends AbstractCodeType
{
    const PLAYER_DECISION_CODE = 'player_decision_code';

    public static function registerSelf()
    {
        parent::registerSelf();
        static::registerCodeAsSubType(PlayerDecisionCode::class);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return self::PLAYER_DECISION_CODE;
    }
}