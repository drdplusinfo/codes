<?php
namespace DrdPlus\Codes;

use DrdPlus\Codes\Partials\TranslatableCode;

/**
 * @method static DistanceCode getIt($codeValue)
 */
class DistanceCode extends TranslatableCode
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
            self::METER => ['one' => 'meter', 'few' => 'meters', 'many' => 'meters'],
            self::KILOMETER => ['one' => 'kilometer', 'few' => 'kilometers', 'many' => 'kilometers'],
            self::LIGHT_YEAR => ['one' => 'light year', 'few' => 'light years', 'many' => 'light years'],
        ],
        'cs' => [
            self::METER => ['one' => 'metr', 'few' => 'metry', 'many' => 'metrů'],
            self::KILOMETER => ['one' => 'kilometr', 'few' => 'kilometry', 'many' => 'kilometrů'],
            self::LIGHT_YEAR => ['one' => 'světelný rok', 'few' => 'světelné roky', 'many' => 'světelných let'],
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