<?php
namespace DrdPlus\Tests\Codes\CombatActions;

use DrdPlus\Codes\CombatActions\MeleeCombatActionCode;
use DrdPlus\Tests\Codes\CodeTest;

class MeleeCombatActionCodeTest extends CodeTest
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
                'headless_attack',
                'cover_of_ally',
                'fight_with_two_weapons',
                'flat_attack',
                'pressure',
                'retreat',
                'attack_on_disabled_opponent',
                'handover_item',
            ],
            MeleeCombatActionCode::getMeleeCombatActionCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }

}