<?php
namespace DrdPlus\Tests\Codes\Armaments;

use DrdPlus\Codes\Armaments\WeaponCategoryCode;
use DrdPlus\Tests\Codes\AbstractCodeTest;

class WeaponCategoryCodeTest extends AbstractCodeTest
{
    /**
     * @test
     */
    public function I_can_get_melee_weapon_category_codes_at_once()
    {
        self::assertSame(
            [
                'axe',
                'knife_and_dagger',
                'mace_and_club',
                'morningstar_and_morgenstern',
                'saber_and_bowie_knife',
                'staff_and_spear',
                'sword',
                'voulge_and_trident',
                'unarmed',
            ],
            WeaponCategoryCode::getMeleeWeaponCategoryValues()
        );
    }

    /**
     * @test
     */
    public function I_can_get_ranged_weapon_category_codes()
    {
        self::assertSame(
            [
                'bow',
                'crossbow',
                'throwing_weapon',
            ],
            WeaponCategoryCode::getRangedWeaponCategoryValues()
        );
    }

    /**
     * @test
     */
    public function I_can_get_projectile_category_codes()
    {
        self::assertSame(
            [
                'arrow',
                'dart',
                'sling_stone',
            ],
            WeaponCategoryCode::getProjectilesCategoryValues()
        );
    }

}