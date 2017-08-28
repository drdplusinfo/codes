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
    public static function getPossibleValues(): array
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

    private static $translations = [
        'en' => [
            self::WITHOUT_HELM => ['one' => 'without helm'],
            self::LEATHER_CAP => ['one' => 'leather cap'],
            self::CHAINMAIL_HOOD => ['one' => 'chainmail hood'],
            self::CONICAL_HELM => ['one' => 'conical helm'],
            self::FULL_HELM => ['one' => 'full helm'],
            self::BARREL_HELM => ['one' => 'barrel helm'],
            self::GREAT_HELM => ['one' => 'great helm'],
        ],
        'cs' => [
            self::WITHOUT_HELM => ['one' => 'bez helmy'],
            self::LEATHER_CAP => ['one' => 'kožená čapka'],
            self::CHAINMAIL_HOOD => ['one' => 'kroužková kukla'],
            self::CONICAL_HELM => ['one' => 'konická helma'],
            self::FULL_HELM => ['one' => 'plná přilba'],
            self::BARREL_HELM => ['one' => 'hrcová přilba'],
            self::GREAT_HELM => ['one' => 'kbelcová přilba'],
        ],
    ];

    protected function fetchTranslations(): array
    {
        return self::$translations;
    }

}