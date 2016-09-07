<?php
namespace DrdPlus\Codes\CombatActions;

use DrdPlus\Codes\Code;

/**
 * @method static CombatActionCode getIt($codeValue)
 */
class CombatActionCode extends Code
{
    // See PPH page 107-109
    const MOVE = 'move';
    const RUN = 'run';
    const STANDARD_ATTACK = 'standard_attack';
    const SWAP_WEAPONS = 'swap_weapons';
    const CONCENTRATION_ON_DEFENSE = 'concentration_on_defense'; // this is moved to generic combat action despite its categorization as melee in PPH
    const PUT_OUT_EASILY_ACCESSIBLE_ITEM = 'put_out_easily_accessible_item'; // from belt or ground etc.
    const PUT_OUT_HARDLY_ACCESSIBLE_ITEM = 'put_out_hardly_accessible_item'; // from backpack or just using both hands
    const HAND_OVER_ITEM = 'hand_over_item';
    const STANDING = 'standing';
    const SITTING_OR_ON_KNEELS = 'sitting_or_on_kneels';
    const PUTTING_ON_ARMOR = 'putting_on_armor';
    const ATTACK_FROM_BEHIND = 'attack_from_behind';
    const BLINDFOLD_FIGHT = 'blindfold_fight';
    const REDUCED_VISIBILITY = 'reduced_visibility';

    /**
     * @return array|string[]
     */
    public static function getCombatActionCodes()
    {
        return [
            self::MOVE,
            self::RUN,
            self::STANDARD_ATTACK,
            self::SWAP_WEAPONS,
            self::CONCENTRATION_ON_DEFENSE,
            self::PUT_OUT_EASILY_ACCESSIBLE_ITEM,
            self::PUT_OUT_HARDLY_ACCESSIBLE_ITEM,
            self::HAND_OVER_ITEM,
            self::STANDING,
            self::SITTING_OR_ON_KNEELS,
            self::PUTTING_ON_ARMOR,
            self::ATTACK_FROM_BEHIND,
            self::BLINDFOLD_FIGHT,
            self::REDUCED_VISIBILITY,
        ];
    }

    /**
     * @return bool
     */
    public function isForMelee()
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isForRanged()
    {
        return true;
    }
}