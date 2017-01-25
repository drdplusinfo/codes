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
                'knife_or_dagger',
                'mace_or_club',
                'morningstar_or_morgenstern',
                'saber_or_bowie_knife',
                'staff_or_spear',
                'sword',
                'voulge_or_trident',
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