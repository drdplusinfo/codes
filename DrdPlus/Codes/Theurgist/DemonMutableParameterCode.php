<?php declare(strict_types=1);

namespace DrdPlus\Codes\Theurgist;

/**
 * @method static DemonMutableParameterCode getIt($codeValue)
 * @method static DemonMutableParameterCode findIt($codeValue)
 */
class DemonMutableParameterCode extends AbstractTheurgistCode
{
    const CAPACITY = 'capacity';
    const ENDURANCE = 'endurance';
    const DURATION = 'duration';
    const QUALITY = 'quality';
    const RADIUS = 'radius';
    const AREA = 'area';
    const INVISIBILITY = 'invisibility';
    const ARMOR = 'armor';
    const SPEED = 'speed';
    const STRENGTH = 'strength';
    const AGILITY = 'agility';
    const KNACK = 'knack';

    private static $translations = [
        'cs' => [
            self::CAPACITY => 'kapacita',
            self::ENDURANCE => 'výdrž',
            self::DURATION => 'doba trvání',
            self::QUALITY => 'kvalita',
            self::RADIUS => 'poloměr',
            self::AREA => 'oblast',
            self::INVISIBILITY => 'neviditelnost',
            self::ARMOR => 'zbroj ',
            self::SPEED => 'rychlost',
            self::STRENGTH => 'síla',
            self::AGILITY => 'obratnost',
            self::KNACK => 'zručnost',
        ],
    ];

    protected function getTranslations(string $languageCode): array
    {
        return static::$translations[$languageCode] ?? [];
    }

}