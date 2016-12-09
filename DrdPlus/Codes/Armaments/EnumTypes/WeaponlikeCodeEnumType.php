<?php
namespace DrdPlus\Codes\Armaments\EnumTypes;

use Doctrineum\String\StringEnumType;
use DrdPlus\Codes\Armaments\MeleeWeaponCode;
use DrdPlus\Codes\Armaments\RangedWeaponCode;
use DrdPlus\Codes\Armaments\WeaponlikeCode;

class WeaponlikeCodeEnumType extends StringEnumType
{
    const WEAPONLIKE_CODE = 'weaponlike_code';

    /**
     * @param WeaponlikeCode $weaponlikeCode
     * @return bool
     */
    public static function registerWeaponlikeAsSubType(WeaponlikeCode $weaponlikeCode)
    {
        if (static::hasSubTypeEnum(get_class($weaponlikeCode))) {
            return false;
        }

        /** Note: same codes like melee and ranged 'spear' results to same Weaponlike code,
         * for example registering both @see RangedWeaponCode::SPEAR
         * and @see MeleeWeaponCode::SPEAR gives on enum rebuilt always only one of them
         * (probably @see RangedWeaponCode because was registered first, but that behaviour is not guaranteed).
         * But that is OK, because same codes HAVE TO be convertible each
         * other, @see \DrdPlus\Codes\Armaments\RangedWeaponCode::convertToMeleeWeaponCodeEquivalent
         * and @see \DrdPlus\Codes\Armaments\MeleeWeaponCode::convertToRangedWeaponCodeEquivalent
         */
        /** @noinspection ExceptionsAnnotatingAndHandlingInspection */
        return static::addSubTypeEnum(get_class($weaponlikeCode), "~^$weaponlikeCode$~");
    }

    /**
     * @return string
     */
    public function getName()
    {
        return self::WEAPONLIKE_CODE;
    }

}