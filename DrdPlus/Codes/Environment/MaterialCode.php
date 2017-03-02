<?php
namespace DrdPlus\Codes\Environment;

use DrdPlus\Codes\Partials\AbstractCode;

class MaterialCode extends AbstractCode
{
    const CLOTH_OR_PAPER_OR_ROPE = 'cloth_or_paper_or_rope';
    const WOOD = 'wood';
    const BAKED_CAY = 'baked_cay';
    const STONE = 'stone';
    const BRONZE = 'bronze';
    const IRON_OR_STEEL = 'iron_or_steel';

    /**
     * @return array
     */
    public static function getPossibleValues()
    {
        return [
            self::CLOTH_OR_PAPER_OR_ROPE,
            self::WOOD,
            self::BAKED_CAY,
            self::STONE,
            self::BRONZE,
            self::IRON_OR_STEEL,
        ];
    }

}