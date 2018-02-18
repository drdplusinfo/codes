<?php
namespace DrdPlus\Codes\Units;

use DrdPlus\Codes\Partials\TranslatableCode;

/**
 * @method static TimeUnitCode getIt($codeValue)
 */
class TimeUnitCode extends TranslatableCode
{
    public const ROUND = 'round';
    public const MINUTE = 'minute';
    public const HOUR = 'hour';
    public const DAY = 'day';
    public const MONTH = 'month';
    public const YEAR = 'year';

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

    /**
     * @return array|string[]
     */
    protected function fetchTranslations(): array
    {
        return [
            'en' => [
                self::ROUND => ['one' => 'round', 'few' => 'rounds', 'many' => 'rounds'],
                self::MINUTE => ['one' => 'minute', 'few' => 'minutes', 'many' => 'minutes'],
                self::HOUR => ['one' => 'hour', 'few' => 'hours', 'many' => 'hours'],
                self::DAY => ['one' => 'day', 'few' => 'days', 'many' => 'days'],
                self::MONTH => ['one' => 'month', 'few' => 'months', 'many' => 'months'],
                self::YEAR => ['one' => 'year', 'few' => 'years', 'many' => 'years'],
            ],
            'cs' => [
                self::ROUND => ['one' => 'kolo', 'few' => 'kola', 'many' => 'kol'],
                self::MINUTE => ['one' => 'minuta', 'few' => 'minuty', 'many' => 'minut'],
                self::HOUR => ['one' => 'hodina', 'few' => 'hodiny', 'many' => 'hodin'],
                self::DAY => ['one' => 'den', 'few' => 'dny', 'many' => 'dní'],
                self::MONTH => ['one' => 'měsíc', 'few' => 'měsíce', 'many' => 'měsíců'],
                self::YEAR => ['one' => 'rok', 'few' => 'roky', 'many' => 'let'],
            ],
        ];
    }
}