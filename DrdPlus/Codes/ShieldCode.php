<?php
namespace DrdPlus\Codes;

/**
 * @method static ShieldCode getIt($codeValue)
 */
class ShieldCode extends Code
{
    const WITHOUT_SHIELD = 'without_shield';
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
            self::WITHOUT_SHIELD,
            self::BUCKLER,
            self::SMALL_SHIELD,
            self::MEDIUM_SHIELD,
            self::HEAVY_SHIELD,
            self::PAVISE
        ];
    }
}