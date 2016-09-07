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
                'standard_attack',
                'swap_weapons',
                'concentration_on_defense',
                'put_out_easily_accessible_item',
                'put_out_hardly_accessible_item',
                'hand_over_item',
                'standing',
                'sitting_or_on_kneels',
                'putting_on_armor',
                'attack_from_behind',
                'blindfold_fight',
                'reduced_visibility',
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