<?php
namespace DrdPlus\Tests\Codes\CombatActions;

use DrdPlus\Codes\CombatActions\CombatActionCode;
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
                'fight_in_reduced_visibility',
                'aimed_shoot',
            ],
            RangedCombatActionCode::getRangedCombatActionCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }

    /**
     * @test
     */
    public function I_can_get_ranged_only_codes()
    {
        $expectedMeleeOnly = array_diff(
            array_values((new \ReflectionClass(RangedCombatActionCode::class))->getConstants()),
            CombatActionCode::getCombatActionCodes()
        );
        self::assertSame($expectedMeleeOnly, RangedCombatActionCode::getRangedOnlyCombatActionCodes());
    }

    /**
     * @test
     */
    public function Ranged_only_codes_are_marked_so()
    {
        $reflection = new \ReflectionClass(RangedCombatActionCode::class);
        foreach ($reflection->getConstants() as $name => $value) {
            $rangedCombatActionCode = RangedCombatActionCode::getIt($value);
            self::assertTrue($rangedCombatActionCode->isForRanged());
            self::assertSame(
                defined(CombatActionCode::class . '::' . $name),
                $rangedCombatActionCode->isForMelee(),
                'Only constant defined in parent CombatActionCode should be usable for melee attack'
            );
        }
    }

}