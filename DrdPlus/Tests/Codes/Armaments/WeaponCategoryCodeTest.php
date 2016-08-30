<?php
namespace DrdPlus\Tests\Codes\Armaments;

use DrdPlus\Codes\Armaments\WeaponCategoryCode;
use DrdPlus\Tests\Codes\CodeTest;

class WeaponCategoryCodeTest extends CodeTest
{
    /**
     * @test
     */
    public function I_can_get_melee_weapon_category_codes_at_once()
    {
        self::assertSame(
            $expectedCodes = [
                'axe',
                'knife_or_dagger',
                'mace_or_club',
                'morningstar_or_morgenstern',
                'saber_or_bowie_knife',
                'staff_or_spear',
                'sword',
                'voulge_or_trident',
                'unarmed',
            ],
            WeaponCategoryCode::getMeleeWeaponCategoryCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }

    /**
     * test
     */
    public function I_can_get_range_weapon_category_codes()
    {
        self::assertSame(
            $expectedCodes = [
                'bow',
                'crossbow',
                'throwing_weapon',
                'arrow',
                'dart',
                'sling_stone',
            ],
            WeaponCategoryCode::getRangeWeaponCategoryCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }

    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
    {
        self::assertSame(
            [
                'axe',
                'knife_or_dagger',
                'mace_or_club',
                'morningstar_or_morgenstern',
                'saber_or_bowie_knife',
                'staff_or_spear',
                'sword',
                'voulge_or_trident',
                'unarmed',
                'bow',
                'crossbow',
                'throwing_weapon',
                'arrow',
                'dart',
                'sling_stone',
            ],
            WeaponCategoryCode::getWeaponCategoryCodes()
        );
    }

}