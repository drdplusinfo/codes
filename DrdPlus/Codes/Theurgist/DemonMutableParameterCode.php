<?php declare(strict_types=1);

namespace DrdPlus\Codes\Theurgist;

/**
 * @method static DemonMutableParameterCode getIt($codeValue)
 * @method static DemonMutableParameterCode findIt($codeValue)
 */
class DemonMutableParameterCode extends AbstractTheurgistCode
{
    const DEMON_CAPACITY = 'demon_capacity';
    const DEMON_ENDURANCE = 'demon_endurance';
    const DEMON_DURATION = 'demon_duration';
    const DEMON_QUALITY = 'demon_quality';
    const DEMON_RADIUS = 'demon_radius';
    const DEMON_AREA = 'demon_area';
    const DEMON_INVISIBILITY = 'demon_invisibility';
    const DEMON_ARMOR = 'demon_armor';
    const DEMON_SPEED = 'demon_speed';
    const DEMON_STRENGTH = 'demon_strength';
    const DEMON_AGILITY = 'demon_agility';
    const DEMON_KNACK = 'demon_knack';

    private static $translations = [
        'cs' => [
            self::DEMON_CAPACITY => 'demon_kapacita',
            self::DEMON_ENDURANCE => 'demon_výdrž',
            self::DEMON_DURATION => 'demon_doba trvání',
            self::DEMON_QUALITY => 'demon_kvalita',
            self::DEMON_RADIUS => 'demon_poloměr',
            self::DEMON_AREA => 'demon_oblast',
            self::DEMON_INVISIBILITY => 'demon_neviditelnost',
            self::DEMON_ARMOR => 'demon_zbroj ',
            self::DEMON_SPEED => 'demon_rychlost',
            self::DEMON_STRENGTH => 'demon_síla',
            self::DEMON_AGILITY => 'demon_obratnost',
            self::DEMON_KNACK => 'demon_zručnost',
        ],
    ];

    protected function getTranslations(string $languageCode): array
    {
        return static::$translations[$languageCode] ?? [];
    }

}