<?php
namespace DrdPlus\Codes;

class ArmorCodes
{
    const WITHOUT_ARMOR = 'without_armor';
    const PADDED_ARMOR = 'padded_armor';
    const LEATHER_ARMOR = 'leather_armor';
    const HOBNAILED_ARMOR = 'hobnailed_armor';
    const CHAINMAIL = 'chainmail';
    const SCALE_ARMOR = 'scale_armor';
    const PLATE_ARMOR = 'plate_armor';
    const FULL_PLATE_ARMOR = 'full_plate_armor';

    /**
     * @return array|string[]
     */
    public static function getArmorCodes()
    {
        return [
            self::WITHOUT_ARMOR,
            self::PADDED_ARMOR,
            self::LEATHER_ARMOR,
            self::HOBNAILED_ARMOR,
            self::CHAINMAIL,
            self::SCALE_ARMOR,
            self::PLATE_ARMOR,
            self::FULL_PLATE_ARMOR,
        ];
    }
}