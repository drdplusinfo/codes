<?php
namespace DrdPlus\Codes\CombatActions;

/**
 * @method static MeleeCombatActionCode getIt($codeValue)
 */
class MeleeCombatActionCode extends CombatActionCode
{
    // See PPH page 107-109
    const HEADLESS_ATTACK = 'headless_attack';
    const COVER_OF_ALLY = 'cover_of_ally';
    const FIGHT_WITH_TWO_WEAPONS = 'fight_with_two_weapons';
    const FLAT_ATTACK = 'flat_attack';
    const PRESSURE = 'pressure';
    const RETREAT = 'retreat';
    const ATTACK_ON_DISABLED_OPPONENT = 'attack_on_disabled_opponent';
    const HANDOVER_ITEM = 'handover_item';

    public static function getMeleeCombatActionCodes()
    {
        $combatActions = self::getCombatActionCodes();
        $combatActions[] = self::HEADLESS_ATTACK;
        $combatActions[] = self::COVER_OF_ALLY;
        $combatActions[] = self::FIGHT_WITH_TWO_WEAPONS;
        $combatActions[] = self::FLAT_ATTACK;
        $combatActions[] = self::PRESSURE;
        $combatActions[] = self::RETREAT;
        $combatActions[] = self::ATTACK_ON_DISABLED_OPPONENT;
        $combatActions[] = self::HANDOVER_ITEM;

        return $combatActions;
    }
}