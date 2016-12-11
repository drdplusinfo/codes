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
        static::registerCodeAsSubType(MeleeWeaponCode::getIt(MeleeWeaponCode::HAND) /* any melee weapon */);
        static::registerCodeAsSubType(RangedWeaponCode::getIt(RangedWeaponCode::HEAVY_CROSSBOW) /* any ranged weapon */);
        static::registerCodeAsSubType(ShieldCode::getIt(ShieldCode::BUCKLER) /* any shield */);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return self::WEAPONLIKE_CODE;
    }

}