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
    public static function getSlingStoneCodes()
    {
        return [
            self::SLING_STONE_LIGHT,
            self::SLING_STONE_HEAVIER,
        ];
    }

    /**
     * @return bool
     */
    public function isSlingStone()
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isArrow()
    {
        return false;
    }

    /**
     * @return bool
     */
    public function isDart()
    {
        return false;
    }

}