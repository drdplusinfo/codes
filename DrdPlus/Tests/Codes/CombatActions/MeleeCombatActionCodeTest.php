<?php
namespace DrdPlus\Tests\Codes\CombatActions;

use DrdPlus\Codes\CombatActions\CombatActionCode;
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
                'move',
                'run',
                'standard_attack',
                'swap_weapons',
                'concentration_on_defense',
                'put_out_easily_accessible_item',
                'put_out_hardly_accessible_item',
                'laying',
                'sitting_or_on_kneels',
                'getting_up',
                'putting_on_armor',
                'attack_from_behind',
                'blindfold_fight',
                'fight_in_reduced_visibility',
                'attack_on_disabled_opponent',
                'headless_attack',
                'cover_of_ally',
                'fight_with_two_weapons',
                'flat_attack',
                'pressure',
                'retreat',
                'handover_item',
            ],
            MeleeCombatActionCode::getMeleeCombatActionCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }

    /**
     * @test
     */
    public function I_can_get_melee_only_codes()
    {
        $expectedMeleeOnly = array_diff(
            array_values((new \ReflectionClass(MeleeCombatActionCode::class))->getConstants()),
            CombatActionCode::getCombatActionCodes()
        );
        self::assertSame($expectedMeleeOnly, MeleeCombatActionCode::getMeleeOnlyCombatActionCodes());
    }

    /**
     * @test
     */
    public function Melee_only_codes_are_marked_so()
    {
        $reflection = new \ReflectionClass(MeleeCombatActionCode::class);
        foreach ($reflection->getConstants() as $name => $value) {
            $meleeCombatActionCode = MeleeCombatActionCode::getIt($value);
            self::assertTrue($meleeCombatActionCode->isForMelee());
            self::assertSame(
                defined(CombatActionCode::class . '::' . $name),
                $meleeCombatActionCode->isForRanged(),
                'Only constant defined in parent CombatActionCode should be usable for ranged attack'
            );
        }
    }
}