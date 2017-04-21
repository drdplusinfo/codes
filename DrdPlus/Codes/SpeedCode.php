<?php
namespace DrdPlus\Codes;

/**
 * @method static SpeedCode getIt($codeValue)
 */
class SpeedCode extends TranslatableCode
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