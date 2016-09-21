<?php
namespace DrdPlus\Codes\CombatActions;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static CombatActionCode getIt($codeValue)
 */
class CombatActionCode extends AbstractCode
{
    // See PPH page 107-109
    const MOVE = 'move';
    const RUN = 'run';
    const MAIN_HAND_ONLY_MELEE_ATTACK = 'main_hand_only_melee_attack';
    const OFFHAND_ONLY_MELEE_ATTACK = 'offhand_only_melee_attack';
    const TWO_HANDS_MELEE_ATTACK = 'two_hands_melee_attack';
    const MAIN_HAND_ONLY_RANGED_ATTACK = 'main_hand_only_ranged_attack'; // possible with crossbow
    const OFFHAND_ONLY_RANGED_ATTACK = 'offhand_only_ranged_attack'; // mini crossbow
    const TWO_HANDS_RANGED_ATTACK = 'two_hands_ranged_attack';
//    'fight_with_two_weapons' is automatic when bearing two weapons (not weapon and shield)
    const SWAP_WEAPONS = 'swap_weapons';
    const CONCENTRATION_ON_DEFENSE = 'concentration_on_defense'; // this is moved to generic combat action despite its categorization as melee in PPH
    const PUT_OUT_EASILY_ACCESSIBLE_ITEM = 'put_out_easily_accessible_item'; // from belt or ground etc.
    const PUT_OUT_HARDLY_ACCESSIBLE_ITEM = 'put_out_hardly_accessible_item'; // from backpack or just using both hands
    const LAYING = 'laying';
    const SITTING_OR_ON_KNEELS = 'sitting_or_on_kneels';
    const GETTING_UP = 'getting_up';
    const PUTTING_ON_ARMOR = 'putting_on_armor';
    const PUTTING_ON_ARMOR_WITH_HELP = 'putting_on_armor_with_help';
    const HELPING_TO_PUT_ON_ARMOR = 'helping_to_put_on_armor';
    const ATTACKED_FROM_BEHIND = 'attacked_from_behind';
    const BLINDFOLD_FIGHT = 'blindfold_fight';
    const FIGHT_IN_REDUCED_VISIBILITY = 'fight_in_reduced_visibility';
    const ATTACK_ON_DISABLED_OPPONENT = 'attack_on_disabled_opponent'; // this is moved to generic combat action despite its categorization as melee in PPH
    const HANDOVER_ITEM = 'handover_item';

    /**
     * @return array|string[]
     */
    public static function getCombatActionCodes()
    {
        return [
            self::MOVE,
            self::RUN,
            self::MAIN_HAND_ONLY_MELEE_ATTACK,
            self::OFFHAND_ONLY_MELEE_ATTACK,
            self::TWO_HANDS_MELEE_ATTACK,
            self::MAIN_HAND_ONLY_RANGED_ATTACK,
            self::OFFHAND_ONLY_RANGED_ATTACK,
            self::TWO_HANDS_RANGED_ATTACK,
            self::SWAP_WEAPONS,
            self::CONCENTRATION_ON_DEFENSE,
            self::PUT_OUT_EASILY_ACCESSIBLE_ITEM,
            self::PUT_OUT_HARDLY_ACCESSIBLE_ITEM,
            self::LAYING,
            self::SITTING_OR_ON_KNEELS,
            self::GETTING_UP,
            self::PUTTING_ON_ARMOR,
            self::PUTTING_ON_ARMOR_WITH_HELP,
            self::HELPING_TO_PUT_ON_ARMOR,
            self::ATTACKED_FROM_BEHIND,
            self::BLINDFOLD_FIGHT,
            self::FIGHT_IN_REDUCED_VISIBILITY,
            self::ATTACK_ON_DISABLED_OPPONENT,
            self::HANDOVER_ITEM,
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