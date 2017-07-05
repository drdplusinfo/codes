<?php
namespace DrdPlus\Codes\Armaments;

/**
 * @method static BodyArmorCode getIt($codeValue)
 */
class BodyArmorCode extends ArmorCode
{
    const WITHOUT_ARMOR = 'without_armor';
    const PADDED_ARMOR = 'padded_armor';
    const LEATHER_ARMOR = 'leather_armor';
    const HOBNAILED_ARMOR = 'hobnailed_armor';
    const CHAINMAIL_ARMOR = 'chainmail_armor';
    const SCALE_ARMOR = 'scale_armor';
    const PLATE_ARMOR = 'plate_armor';
    const FULL_PLATE_ARMOR = 'full_plate_armor';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues(): array
    {
        return [
            self::WITHOUT_ARMOR,
            self::PADDED_ARMOR,
            self::LEATHER_ARMOR,
            self::HOBNAILED_ARMOR,
            self::CHAINMAIL_ARMOR,
            self::SCALE_ARMOR,
            self::PLATE_ARMOR,
            self::FULL_PLATE_ARMOR,
        ];
    }

    /**
     * @return bool
     */
    public function isHelm(): bool
    {
        return false;
    }

    /**
     * @return bool
     */
    public function isBodyArmor(): bool
    {
        return true;
    }

    private static $translations = [
        'en' => [
            self::WITHOUT_ARMOR => ['one' => 'without armor'],
            self::PADDED_ARMOR => ['one' => 'padded armor'],
            self::LEATHER_ARMOR => ['one' => 'leather armor'],
            self::HOBNAILED_ARMOR => ['one' => 'hobnailed armor'],
            self::CHAINMAIL_ARMOR => ['one' => 'chainmail armor'],
            self::SCALE_ARMOR => ['one' => 'scale armor'],
            self::PLATE_ARMOR => ['one' => 'plate armor'],
            self::FULL_PLATE_ARMOR => ['one' => 'full plate armor'],
        ],
        'cs' => [
            self::WITHOUT_ARMOR => ['one' => 'beze zbroje'],
            self::PADDED_ARMOR => ['one' => 'prošívaná zbroj'],
            self::LEATHER_ARMOR => ['one' => 'kožená zbroj'],
            self::HOBNAILED_ARMOR => ['one' => 'pobíjená zbroj'],
            self::CHAINMAIL_ARMOR => ['one' => 'kroužková zbroj'],
            self::SCALE_ARMOR => ['one' => 'šupinová zbroj'],
            self::PLATE_ARMOR => ['one' => 'plátová zbroj'],
            self::FULL_PLATE_ARMOR => ['one' => 'plná plátová zbroj'],
        ],
    ];

    protected function fetchTranslations(): array
    {
        return self::$translations;
    }

}