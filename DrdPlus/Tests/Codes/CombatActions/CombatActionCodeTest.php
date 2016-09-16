<?php
namespace DrdPlus\Tests\Codes\CombatActions;

use DrdPlus\Codes\CombatActions\CombatActionCode;
use DrdPlus\Tests\Codes\CodeTest;

class CombatActionCodeTest extends CodeTest
{

    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
    {
        self::assertSame(
            $expectedCodes = [
                'move',
                'run',
                'main_hand_only_melee_attack',
                'offhand_only_melee_attack',
                'both_hands_melee_attack',
                'main_hand_only_ranged_attack',
                'offhand_only_ranged_attack',
                'two_hands_ranged_attack',
                'swap_weapons',
                'concentration_on_defense',
                'put_out_easily_accessible_item',
                'put_out_hardly_accessible_item',
                'laying',
                'sitting_or_on_kneels',
                'getting_up',
                'putting_on_armor',
                'putting_on_armor_with_help',
                'helping_to_put_on_armor',
                'attacked_from_behind',
                'blindfold_fight',
                'fight_in_reduced_visibility',
                'attack_on_disabled_opponent',
            ],
            CombatActionCode::getCombatActionCodes(),
            'difference: ' . implode(',', array_diff($expectedCodes, CombatActionCode::getCombatActionCodes()))
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }

    /**
     * @test
     */
    public function It_is_both_for_melee_and_ranged()
    {
        self::assertTrue(CombatActionCode::getIt(CombatActionCode::BLINDFOLD_FIGHT)->isForMelee());
        self::assertTrue(CombatActionCode::getIt(CombatActionCode::CONCENTRATION_ON_DEFENSE)->isForRanged());
    }

}