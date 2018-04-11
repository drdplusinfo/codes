<?php
namespace DrdPlus\Codes\Environment;

use DrdPlus\Codes\Partials\TranslatableCode;

/**
 * @method static MaterialCode getIt($codeValue)
 * @method static MaterialCode findIt($codeValue)
 */
class MaterialCode extends TranslatableCode
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

    protected function fetchTranslations(): array
    {
        return [
            'en' => [
                self::CLOTH_OR_PAPER_OR_ROPE => ['one' => 'cloth or paper or rope'],
                self::WOOD => ['one' => 'wood'],
                self::BAKED_CAY => ['one' => 'baked cay'],
                self::STONE => ['one' => 'stone'],
                self::BRONZE => ['one' => 'bronze'],
                self::IRON_OR_STEEL => ['one' => 'iron or steel'],
            ],
            'cs' => [
                self::CLOTH_OR_PAPER_OR_ROPE => ['one' => 'oblečení, papír, lano...'],
                self::WOOD => ['one' => 'dřevo'],
                self::BAKED_CAY => ['one' => 'pálená hlína'],
                self::STONE => ['one' => 'kámen'],
                self::BRONZE => ['one' => 'bronz'],
                self::IRON_OR_STEEL => ['one' => 'železo, ocel...'],
            ]
        ];
    }

}