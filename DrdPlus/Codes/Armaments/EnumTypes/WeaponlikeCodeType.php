<?php
namespace DrdPlus\Codes\Armaments\EnumTypes;

use DrdPlus\Codes\Armaments\MeleeWeaponCode;
use DrdPlus\Codes\Armaments\RangedWeaponCode;
use DrdPlus\Codes\Armaments\ShieldCode;
use DrdPlus\Codes\EnumTypes\AbstractCodeType;

class WeaponlikeCodeType extends AbstractCodeType
{
    const WEAPONLIKE_CODE = 'weaponlike_code';

    public static function registerSelf()
    {
        parent::registerSelf();
        static::registerCode(MeleeWeaponCode::class);
        static::registerCode(RangedWeaponCode::class);
        static::registerCode(ShieldCode::class);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return self::WEAPONLIKE_CODE;
    }

}