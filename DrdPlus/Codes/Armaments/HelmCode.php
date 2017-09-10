<?php
namespace DrdPlus\Codes\Armaments;

/**
 * @method static HelmCode getIt($codeValue)
 */
class HelmCode extends ArmorCode
{

    const WITHOUT_HELM = 'without_helm';
    const LEATHER_CAP = 'leather_cap';
    const CHAINMAIL_HOOD = 'chainmail_hood';
    const CONICAL_HELM = 'conical_helm';
    const FULL_HELM = 'full_helm';
    const BARREL_HELM = 'barrel_helm';
    const GREAT_HELM = 'great_helm';

    /**
     * @return array|string[]
     */
    protected static function getDefaultValues(): array
    {
        return [
            self::WITHOUT_HELM,
            self::LEATHER_CAP,
            self::CHAINMAIL_HOOD,
            self::CONICAL_HELM,
            self::FULL_HELM,
            self::BARREL_HELM,
            self::GREAT_HELM,
        ];
    }

    /**
     * @param string $helmCodeValue
     * @param array $translations
     * @return bool
     * @throws \DrdPlus\Codes\Partials\Exceptions\InvalidLanguageCode
     * @throws \DrdPlus\Codes\Partials\Exceptions\UnknownTranslationPlural
     * @throws \DrdPlus\Codes\Partials\Exceptions\InvalidTranslationFormat
     */
    public static function addNewHelmCode(string $helmCodeValue, array $translations): bool
    {
        return static::addNewCode($helmCodeValue, $translations);
    }

    /**
     * @return bool
     */
    final public function isHelm(): bool
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isBodyArmor(): bool
    {
        return false;
    }

    protected function getTranslationsFileName(): string
    {
        return __DIR__ . '/translations/helm_code.csv';
    }
}