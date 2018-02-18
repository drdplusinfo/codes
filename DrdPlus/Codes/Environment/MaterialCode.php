<?php
namespace DrdPlus\Codes\Environment;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static MaterialCode getIt($codeValue)
 */
class MaterialCode extends AbstractCode
{
    public const CLOTH_OR_PAPER_OR_ROPE = 'cloth_or_paper_or_rope';
    public const WOOD = 'wood';
    public const BAKED_CAY = 'baked_cay';
    public const STONE = 'stone';
    public const BRONZE = 'bronze';
    public const IRON_OR_STEEL = 'iron_or_steel';

    /**
     * @return array
     */
    public static function getPossibleValues(): array
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