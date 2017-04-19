<?php
namespace DrdPlus\Codes;

/**
 * @method static DistanceCode getIt($codeValue)
 */
class DistanceCode extends TranslatableCode
{
    const M = 'm';
    const KM = 'km';
    const LIGHT_YEAR = 'light_year';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues(): array
    {
        return [
            self::M,
            self::KM,
            self::LIGHT_YEAR,
        ];
    }

    private static $translations = [
        'cs' => [
            self::M => ['one' => 'm', 'few' => 'm', 'many' => 'm'],
            self::KM => ['one' => 'km', 'few' => 'km', 'many' => 'km'],
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