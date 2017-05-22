<?php
namespace DrdPlus\Codes;

use DrdPlus\Codes\Partials\TranslatableCode;

/**
 * @method static DistanceUnitCode getIt($codeValue)
 */
class DistanceUnitCode extends TranslatableCode
{
    const METER = 'meter';
    const KILOMETER = 'kilometer';
    const LIGHT_YEAR = 'light_year';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues(): array
    {
        return [
            self::METER,
            self::KILOMETER,
            self::LIGHT_YEAR,
        ];
    }

    private static $translations = [
        'en' => [
            self::METER => ['one' => 'meter', 'one_decimal' => 'meter', 'few' => 'meters', 'many' => 'meters'],
            self::KILOMETER => ['one' => 'kilometer', 'few' => 'kilometers', 'many' => 'kilometers'],
            self::LIGHT_YEAR => ['one' => 'light year', 'few' => 'light years', 'many' => 'light years'],
        ],
        'cs' => [
            self::METER => ['one' => 'metr', 'few' => 'metry', 'few_decimal' => 'metru', 'many' => 'metrů'],
            self::KILOMETER => ['one' => 'kilometr', 'few' => 'kilometry', 'few_decimal' => 'kilometru', 'many' => 'kilometrů'],
            self::LIGHT_YEAR => ['one' => 'světelný rok', 'few' => 'světelné roky', 'few_decimal' => 'světelného roku', 'many' => 'světelných let'],
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