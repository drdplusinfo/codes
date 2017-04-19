<?php
namespace DrdPlus\Codes;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static TimeCode getIt($codeValue)
 */
class TimeCode extends AbstractCode
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

    /**
     * @param string $languageCode
     * @param number $amount
     * @return string
     */
    public function translateTo(string $languageCode, number $amount): string
    {
        $code = $this->getValue();
        $translations = $this->getTranslations($languageCode);
        $plural = $this->convertAmountToPlural($amount);
        if (($translations[$code][$amount] ?? null) !== null) {
            return $translations[$code][$amount];
        }
        if ($languageCode === 'en') {
            return str_replace('_', ' ', $code); // just replacing underscores by spaces
        }
        trigger_error(
            "Missing translation for value '{$code}', language '{$languageCode}' and plural '{$amount}'"
            . ', english will be used instead',
            E_USER_WARNING
        );
        $translations = $this->getTranslations('en');
        if (($translations[$code][$amount] ?? null) !== null) {
            return $translations[$code][$amount]; // explicit english translation
        }

        return str_replace('_', ' ', $code); // just replacing underscores by spaces
    }

    /**
     * @param number $amount
     * @return string
     */
    private function convertAmountToPlural(number $amount): string
    {
        $amount = abs($amount);
        if ($amount <= 1) {
            return 'one';
        }
        if ($amount < 5) {
            return 'few';
        }

        return 'many';
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