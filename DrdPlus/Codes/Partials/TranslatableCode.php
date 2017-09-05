<?php
namespace DrdPlus\Codes\Partials;

use Granam\Number\NumberInterface;
use Granam\Number\Tools\ToNumber;
use Granam\Tools\ValueDescriber;

/**
 * @method static TranslatableCode getIt($codeValue)
 */
abstract class TranslatableCode extends AbstractCode implements Translatable
{

    private static $customValues = [];
    private static $customCodeTranslations = [];

    protected static $ONE = 'one';
    protected static $FEW = 'few';
    protected static $FEW_DECIMAL = 'few_decimal';
    protected static $MANY = 'many';

    public static function getPossibleValues(): array
    {
        return array_merge(static::getDefaultValues(), static::getCustomValues());
    }

    protected static function getDefaultValues(): array
    {
        return parent::getPossibleValues();
    }

    protected static function getCustomValues(): array
    {
        return self::$customValues[static::class] ?? [];
    }

    /**
     * @param string $languageCode
     * @param int|NumberInterface $amount
     * @return string
     */
    public function translateTo(string $languageCode, $amount = 1): string
    {
        $code = $this->getValue();
        $translations = $this->getTranslations($languageCode);
        /** @noinspection ExceptionsAnnotatingAndHandlingInspection */
        $plural = $this->convertAmountToPlural(ToNumber::toNumber($amount));
        if (($translations[$code][$plural] ?? null) !== null) {
            return $translations[$code][$plural];
        }
        if ($plural === self::$FEW_DECIMAL) {
            $plural = self::$FEW;
            if (($translations[$code][$plural] ?? null) !== null) {
                return $translations[$code][$plural];
            }
        }
        if ($plural !== self::$ONE) {
            $plural = self::$ONE;
            if (($translations[$code][$plural] ?? null) !== null) {
                return $translations[$code][$plural];
            }
        }
        if ($languageCode === 'en') {
            return str_replace('_', ' ', $code); // just replacing underscores by spaces
        }
        trigger_error(
            "Missing translation for value '{$code}', language '{$languageCode}' and plural '{$plural}'"
            . ', english will be used instead',
            E_USER_WARNING
        );
        $translations = $this->getTranslations('en');
        if (($translations[$code][$plural] ?? null) !== null) {
            return $translations[$code][$plural]; // explicit english translation
        }

        return str_replace('_', ' ', $code); // just replacing underscores by spaces
    }

    /**
     * @param number $amount
     * @return string
     */
    private function convertAmountToPlural($amount): string
    {
        $amount = abs($amount);
        if ((float)$amount === 1.0) {
            return self::$ONE;
        }
        if ($amount < 5) {
            if (strpos((string)$amount, '.') !== false) {
                return self::$FEW_DECIMAL;
            }

            return self::$FEW;
        }

        return self::$MANY;
    }

    private $translations;

    /**
     * @param string $requiredLanguageCode
     * @return array|string[]
     */
    protected function getTranslations(string $requiredLanguageCode): array
    {
        if ($this->translations === null) {
            $translations = self::$customCodeTranslations[static::class] ?? [];
            if (count($translations) === 0) {
                $translations = $this->fetchTranslations();
            } else {
                foreach ($this->fetchTranslations() as $languageCode => $languageTranslations) {
                    /** @var array $languageTranslations */
                    foreach ($languageTranslations as $codeValue => $codeTranslations) {
                        // child translations can overwrite custom translations
                        $translations[$languageCode][$codeValue] = $codeTranslations;
                    }
                }
            }
            $this->translations = $translations;
        }

        return $this->translations[$requiredLanguageCode] ?? [];
    }

    /**
     * @return array|string[][]
     */
    abstract protected function fetchTranslations(): array;

    /**
     * @param string $newValue
     * @param array $translations
     * @return bool
     * @throws \DrdPlus\Codes\Partials\Exceptions\InvalidLanguageCode
     * @throws \DrdPlus\Codes\Partials\Exceptions\UnknownTranslationPlural
     * @throws \DrdPlus\Codes\Partials\Exceptions\InvalidTranslationFormat
     */
    public static function extendByCustomValue(string $newValue, array $translations): bool
    {
        /** @noinspection ExceptionsAnnotatingAndHandlingInspection */
        if (in_array($newValue, static::getPossibleValues(), true)) {
            return false;
        }
        self::$customValues[static::class][] = $newValue;
        self::checkTranslationsFormat($translations);
        foreach ($translations as $languageCode => $languageTranslations) {
            self::$customCodeTranslations[static::class][$languageCode][$newValue] = $languageTranslations;
        }

        return true;
    }

    /**
     * @param array $translations
     * @throws \DrdPlus\Codes\Partials\Exceptions\InvalidLanguageCode
     * @throws \DrdPlus\Codes\Partials\Exceptions\InvalidTranslationFormat
     * @throws \DrdPlus\Codes\Partials\Exceptions\UnknownTranslationPlural
     */
    private static function checkTranslationsFormat(array $translations)
    {
        /**
         * @var string $languageCode
         * @var array|string[] $languageTranslations
         */
        foreach ($translations as $languageCode => $languageTranslations) {
            if (!preg_match('~^[[:alpha:]]{2}$~', $languageCode)) {
                throw new Exceptions\InvalidLanguageCode(
                    'Code of language used for custom code translation should be 2-char string, got ' .
                    var_export($languageCode, true)
                );
            }
            if (!is_array($languageTranslations)) {
                throw new Exceptions\InvalidTranslationFormat(
                    'Expected array of translations for singular and plural, got '
                    . ValueDescriber::describe($languageTranslations) . ' for language ' . $languageCode
                );
            }
            foreach ($languageTranslations as $plural => $translation) {
                if (!in_array($plural, [self::$ONE, self::$FEW, self::$FEW_DECIMAL, self::$MANY], true)) {
                    throw new Exceptions\UnknownTranslationPlural(
                        'Expected one of ' . implode(',', [self::$ONE, self::$FEW, self::$FEW_DECIMAL, self::$MANY, true])
                        . ', got ' . var_export($plural, true)
                    );
                }
                if (!is_string($translation) || $translation === '') {
                    throw new Exceptions\InvalidTranslationFormat(
                        'Expected non-empty string, got ' . ValueDescriber::describe($translation)
                    );
                }
            }
        }
    }
}