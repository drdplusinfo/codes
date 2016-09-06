<?php
namespace DrdPlus\Tests\Codes\CombatActions;

use DrdPlus\Codes\CombatActions\RangedCombatActionCode;
use DrdPlus\Tests\Codes\CodeTest;

class RangedCombatActionCodeTest extends CodeTest
{

    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
    {
        self::assertSame(
            $expectedCodes = [
                'standard_attack',
                'swap_weapons',
                'concentration_on_defense',
                'put_out_easily_accessible_item',
                'put_out_hardly_accessible_item',
                'standing',
                'sitting_or_on_kneels',
                'putting_on_armor',
                'attack_from_behind',
                'blindfold_fight',
                'reduced_visibility',
                'aimed_shoot',
            ],
            RangedCombatActionCode::getRangedCombatActionCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }
}