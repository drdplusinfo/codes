<?php
namespace DrdPlus\Codes\CombatActions;

/**
 * @method static RangedCombatActionCode getIt($codeValue)
 */
class RangedCombatActionCode extends CombatActionCode
{
    // See PPH page 108
    const AIMED_SHOOT = 'aimed_shoot';

    /**
     * @return array|\string[]
     */
    public static function getRangedCombatActionCodes()
    {
        $rangedCombatActions = self::getCombatActionCodes();
        $rangedCombatActions[] = self::AIMED_SHOOT;

        return $rangedCombatActions;
    }
}