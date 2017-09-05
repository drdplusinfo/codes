<?php
namespace DrdPlus\Codes\Armaments;

/**
 * @method static SlingStoneCode getIt($codeValue)
 */
class SlingStoneCode extends ProjectileCode
{
    const SLING_STONE_LIGHT = 'sling_stone_light';
    const SLING_STONE_HEAVIER = 'sling_stone_heavier';

    /**
     * @return array|string[]
     */
    protected static function getDefaultValues(): array
    {
        return [
            self::SLING_STONE_LIGHT,
            self::SLING_STONE_HEAVIER,
        ];
    }

    /**
     * @return bool
     */
    final public function isSlingStone(): bool
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isArrow(): bool
    {
        return false;
    }

    /**
     * @return bool
     */
    public function isDart(): bool
    {
        return false;
    }

    protected function getTranslationsFileName(): string
    {
        return __DIR__ . '/translations/sling_stone.csv';
    }

}