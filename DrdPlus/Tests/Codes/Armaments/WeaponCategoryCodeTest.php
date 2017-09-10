<?php
namespace DrdPlus\Tests\Codes\Armaments;

use DrdPlus\Codes\Armaments\WeaponCategoryCode;
use DrdPlus\Tests\Codes\Partials\TranslatableCodeTest;

class WeaponCategoryCodeTest extends TranslatableCodeTest
{
    /**
     * @test
     */
    public function I_can_get_melee_weapon_category_codes_at_once()
    {
        self::assertSame(
            $codes = [
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
        foreach ($codes as $code) {
            $meleeCategory = WeaponCategoryCode::getIt($code);
            self::assertTrue($meleeCategory->isMeleeWeaponCategory());
            self::assertFalse($meleeCategory->isRangedWeaponCategory());
            self::assertFalse($meleeCategory->isProjectileCategory());
        }
    }

    /**
     * @test
     */
    public function I_can_get_ranged_weapon_category_codes()
    {
        self::assertSame(
            $codes = ['bow', 'crossbow', 'throwing_weapon'],
            WeaponCategoryCode::getRangedWeaponCategoryValues()
        );
        foreach ($codes as $code) {
            $rangedCategory = WeaponCategoryCode::getIt($code);
            self::assertTrue($rangedCategory->isRangedWeaponCategory());
            self::assertFalse($rangedCategory->isMeleeWeaponCategory());
            self::assertFalse($rangedCategory->isProjectileCategory());
        }
    }

    /**
     * @test
     */
    public function I_can_get_projectile_category_codes()
    {
        self::assertSame(
            $codes = ['arrow', 'dart', 'sling_stone'],
            WeaponCategoryCode::getProjectileCategoryValues()
        );
        foreach ($codes as $code) {
            $projectileCategory = WeaponCategoryCode::getIt($code);
            self::assertTrue($projectileCategory->isProjectileCategory());
            self::assertFalse($projectileCategory->isMeleeWeaponCategory());
            self::assertFalse($projectileCategory->isRangedWeaponCategory());
        }
    }

}