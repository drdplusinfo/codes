<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\MeleeWeaponCategoryCode;

class MeleeWeaponCategoryCodeTest extends CodeTest
{
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
                'morning_star_or_morgenstern',
                'saber_or_bowie_knife',
                'staff_or_spear',
                'sword',
                'voulge_or_trident',
                'unarmed'
            ],
            MeleeWeaponCategoryCode::getMeleeWeaponCategoryCodes()
        );
    }

}
