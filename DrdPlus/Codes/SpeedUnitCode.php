<?php
namespace DrdPlus\Codes;

/**
 * @method static SpeedUnitCode getIt($codeValue)
 */
class SpeedUnitCode extends TranslatableCode
{
    const METERS_PER_ROUND = 'meters_per_round';
    const KILOMETERS_PER_HOUR = 'kilometers_per_hour';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues(): array
    {
        return [
            self::METERS_PER_ROUND,
            self::KILOMETERS_PER_HOUR,
        ];
    }

    private static $translations = [
        'cs' => [
            self::METERS_PER_ROUND => ['one' => 'metr za kolo', 'few' => 'metry za kolo', 'many' => 'metrů za kolo'],
            self::KILOMETERS_PER_HOUR => ['one' => 'kilometr za hodinu', 'few' => 'kilometry za hodinu', 'many' => 'kilometrů za hodinu'],
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