<?php
namespace DrdPlus\Tests\Codes\Skills;

use DrdPlus\Codes\Skills\PhysicalSkillCode;

class PhysicalSkillCodeTest extends SkillCodeTest
{
    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
    {
        self::assertEquals(
            $expectedPhysicalSkillCodes = [
                'armor_wearing',
                'athletics',
                'blacksmithing',
                'boat_driving',
                'cart_driving',
                'city_moving',
                'climbing_and_hillwalking',
                'fast_marsh',
                'fight_unarmed',
                'fight_with_axes',
                'fight_with_knifes_and_daggers',
                'fight_with_maces_and_clubs',
                'fight_with_morningstars_and_morgensterns',
                'fight_with_sabers_and_bowie_knifes',
                'fight_with_shields',
                'fight_with_staffs_and_spears',
                'fight_with_swords',
                'fight_with_throwing_weapons',
                'fight_with_two_weapons',
                'fight_with_voulges_and_tridents',
                'flying',
                'forest_moving',
                'moving_in_mountains',
                'riding',
                'sailing',
                'shield_usage',
                'swimming',
            ],
            PhysicalSkillCode::getPhysicalSkillCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedPhysicalSkillCodes);
    }
}