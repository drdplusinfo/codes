<?php
namespace DrdPlus\Codes;

use DrdPlus\Codes\Partials\TranslatableCode;

/**
 * @method static SpeedUnitCode getIt($codeValue)
 */
class SpeedUnitCode extends TranslatableCode
{
    const METER_PER_ROUND = 'meter_per_round';
    const KILOMETER_PER_HOUR = 'kilometer_per_hour';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues(): array
    {
        return [
            self::METER_PER_ROUND,
            self::KILOMETER_PER_HOUR,
        ];
    }

    private static $translations = [
        'en' => [
            self::METER_PER_ROUND => ['one' => 'meter per round', 'few' => 'meters per round', 'many' => 'meters per round'],
            self::KILOMETER_PER_HOUR => ['one' => 'kilometer per hour', 'few' => 'kilometers per hour', 'many' => 'kilometers per hour'],
        ],
        'cs' => [
            self::METER_PER_ROUND => ['one' => 'metr za kolo', 'few' => 'metry za kolo', 'many' => 'metrů za kolo'],
            self::KILOMETER_PER_HOUR => ['one' => 'kilometr za hodinu', 'few' => 'kilometry za hodinu', 'many' => 'kilometrů za hodinu'],
        ],
    ];

    /**
     * @param string $languageCode
     * @return array|string[]
     */
    protected function getTranslations(string $languageCode): array
    {
        return self::$translations[$languageCode] ?? [];
    }
}