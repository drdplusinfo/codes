<?php
namespace DrdPlus\Codes\Units;

use DrdPlus\Codes\Partials\TranslatableCode;

/**
 * @method static DistanceUnitCode getIt($codeValue)
 */
class DistanceUnitCode extends TranslatableCode
{
    public const DECIMETER = 'decimeter';
    public const METER = 'meter';
    public const KILOMETER = 'kilometer';
    public const LIGHT_YEAR = 'light_year';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues(): array
    {
        return [
            self::DECIMETER,
            self::METER,
            self::KILOMETER,
            self::LIGHT_YEAR,
        ];
    }

    /**
     * @return array|string[]
     */
    protected function fetchTranslations(): array
    {
        return [
            'en' => [
                self::DECIMETER => ['one' => 'decimeter', 'one_decimal' => 'decimeter', 'few' => 'decimeters', 'many' => 'decimeters'],
                self::METER => ['one' => 'meter', 'one_decimal' => 'meter', 'few' => 'meters', 'many' => 'meters'],
                self::KILOMETER => ['one' => 'kilometer', 'few' => 'kilometers', 'many' => 'kilometers'],
                self::LIGHT_YEAR => ['one' => 'light year', 'few' => 'light years', 'many' => 'light years'],
            ],
            'cs' => [
                self::DECIMETER => ['one' => 'decimetr', 'few' => 'decimetry', 'few_decimal' => 'decimetru', 'many' => 'decimetrů'],
                self::METER => ['one' => 'metr', 'few' => 'metry', 'few_decimal' => 'metru', 'many' => 'metrů'],
                self::KILOMETER => ['one' => 'kilometr', 'few' => 'kilometry', 'few_decimal' => 'kilometru', 'many' => 'kilometrů'],
                self::LIGHT_YEAR => ['one' => 'světelný rok', 'few' => 'světelné roky', 'few_decimal' => 'světelného roku', 'many' => 'světelných let'],
            ],
        ];
    }
}