<?php
namespace DrdPlus\Codes;

/**
 * @method static ShieldCode getIt($codeValue)
 */
class ShieldCode extends Code
{
    const BUCKLER = 'buckler';
    const SMALL_SHIELD = 'small_shield';
    const MEDIUM_SHIELD = 'medium_shield';
    const HEAVY_SHIELD = 'heavy_shield';
    const PAVISE = 'pavise';

    /**
     * @return array|string[]
     */
    public static function getShieldCodes()
    {
        return [
            self::BUCKLER,
            self::SMALL_SHIELD,
            self::MEDIUM_SHIELD,
            self::HEAVY_SHIELD,
            self::PAVISE
        ];
    }
}