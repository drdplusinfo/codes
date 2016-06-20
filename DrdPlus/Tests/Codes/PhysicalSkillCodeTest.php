<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\PhysicalSkillCode;

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
                'fight_with_weapon',
                'flying',
                'forest_moving',
                'moving_in_mountains',
                'riding',
                'sailing',
                'shield_usage',
                'swimming'
            ],
            PhysicalSkillCode::getPhysicalSkillCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedPhysicalSkillCodes);
    }
}