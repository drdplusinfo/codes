<?php
namespace DrdPlus\Codes;

/**
 * @method static TimeUnitCode getIt($codeValue)
 */
class TimeUnitCode extends TranslatableCode
{
    const ROUND = 'round';
    const MINUTE = 'minute';
    const HOUR = 'hour';
    const DAY = 'day';
    const MONTH = 'month';
    const YEAR = 'year';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues(): array
    {
        return [
            self::ROUND,
            self::MINUTE,
            self::HOUR,
            self::DAY,
            self::MONTH,
            self::YEAR,
        ];
    }

    private static $translations = [
        'cs' => [
            self::ROUND => ['one' => 'kolo', 'few' => 'kola', 'many' => 'kol'],
            self::MINUTE => ['one' => 'minuta', 'few' => 'minuty', 'many' => 'minut'],
            self::HOUR => ['one' => 'hodina', 'few' => 'hodiny', 'many' => 'hodin'],
            self::DAY => ['one' => 'den', 'few' => 'dny', 'many' => 'dní'],
            self::MONTH => ['one' => 'měsíc', 'few' => 'měsíce', 'many' => 'měsíců'],
            self::YEAR => ['one' => 'rok', 'few' => 'roky', 'many' => 'let'],
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