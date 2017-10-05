<?php
namespace DrdPlus\Codes\Armaments;

/**
 * @method static RangedWeaponCode getIt($codeValue)
 */
class RangedWeaponCode extends WeaponCode
{
    private static $customRangedWeaponCodePerCategory = [];

    // bows
    const SHORT_BOW = 'short_bow';
    const LONG_BOW = 'long_bow';
    const SHORT_COMPOSITE_BOW = 'short_composite_bow';
    const LONG_COMPOSITE_BOW = 'long_composite_bow';
    const POWER_BOW = 'power_bow';

    /**
     * @param bool $withCustomValues = true
     * @return array|string[]
     */
    public static function getBowsValues(bool $withCustomValues = true): array
    {
        $defaultValues = [
            self::SHORT_BOW,
            self::LONG_BOW,
            self::SHORT_COMPOSITE_BOW,
            self::LONG_COMPOSITE_BOW,
            self::POWER_BOW,
        ];
        if (!$withCustomValues) {
            return $defaultValues;
        }

        return array_merge($defaultValues, static::$customRangedWeaponCodePerCategory[WeaponCategoryCode::BOWS] ?? []);
    }

    // crossbows
    const MINICROSSBOW = 'minicrossbow';
    const LIGHT_CROSSBOW = 'light_crossbow';
    const MILITARY_CROSSBOW = 'military_crossbow';
    const HEAVY_CROSSBOW = 'heavy_crossbow';

    /**
     * @param bool $withCustomValues = true
     * @return array|string[]
     */
    public static function getCrossbowsValues(bool $withCustomValues = true): array
    {
        $defaultValues = [
            self::MINICROSSBOW,
            self::LIGHT_CROSSBOW,
            self::MILITARY_CROSSBOW,
            self::HEAVY_CROSSBOW,
        ];
        if (!$withCustomValues) {
            return $defaultValues;
        }

        return array_merge($defaultValues, static::$customRangedWeaponCodePerCategory[WeaponCategoryCode::CROSSBOWS] ?? []);
    }

    // throwing weapons
    const SAND = 'sand';
    const ROCK = 'rock';
    const THROWING_DAGGER = 'throwing_dagger';
    const LIGHT_THROWING_AXE = 'light_throwing_axe';
    const WAR_THROWING_AXE = 'war_throwing_axe';
    const THROWING_HAMMER = 'throwing_hammer';
    const SHURIKEN = 'shuriken';
    const SPEAR = 'spear';
    const JAVELIN = 'javelin';
    const SLING = 'sling';

    /**
     * @param bool $withCustomValues = true
     * @return array|string[]
     */
    public static function getThrowingWeaponsValues(bool $withCustomValues = true): array
    {
        $defaultValues = [
            self::SAND,
            self::ROCK,
            self::THROWING_DAGGER,
            self::LIGHT_THROWING_AXE,
            self::WAR_THROWING_AXE,
            self::THROWING_HAMMER,
            self::SHURIKEN,
            self::SPEAR,
            self::JAVELIN,
            self::SLING,
        ];
        if (!$withCustomValues) {
            return $defaultValues;
        }

        return array_merge($defaultValues, static::$customRangedWeaponCodePerCategory[WeaponCategoryCode::THROWING_WEAPONS] ?? []);
    }

    /**
     * @return array|string[]
     */
    protected static function getDefaultValues(): array
    {
        return array_values( // to get continual integer keys
            array_merge(
                self::getBowsValues(false /* without custom */),
                self::getCrossbowsValues(false /* without custom */),
                self::getThrowingWeaponsValues(false /* without custom */)
            )
        );
    }

    /**
     * @param string $newRangedWeaponCodeValue
     * @param WeaponCategoryCode $rangedWeaponCategoryCode
     * @param array $translations
     * @return bool
     * @throws \DrdPlus\Codes\Armaments\Exceptions\InvalidWeaponCategoryForNewRangedWeaponCode
     * @throws \DrdPlus\Codes\Armaments\Exceptions\RangedWeaponIsAlreadyInDifferentWeaponCategory
     * @throws \DrdPlus\Codes\Partials\Exceptions\InvalidLanguageCode
     * @throws \DrdPlus\Codes\Partials\Exceptions\UnknownTranslationPlural
     * @throws \DrdPlus\Codes\Partials\Exceptions\InvalidTranslationFormat
     */
    public static function addNewRangedWeaponCode(
        string $newRangedWeaponCodeValue,
        WeaponCategoryCode $rangedWeaponCategoryCode,
        array $translations
    ): bool
    {
        if (!$rangedWeaponCategoryCode->isRangedWeaponCategory()) {
            throw new Exceptions\InvalidWeaponCategoryForNewRangedWeaponCode(
                'Expected one of ranged weapon categories, got ' . $rangedWeaponCategoryCode
            );
        }

        $extended = static::addNewCode($newRangedWeaponCodeValue, $translations);
        if (!$extended) {
            self::guardSameCategory($newRangedWeaponCodeValue, $rangedWeaponCategoryCode);

            return false;
        }
        self::$customRangedWeaponCodePerCategory[$rangedWeaponCategoryCode->getValue()][] = $newRangedWeaponCodeValue;

        return true;
    }

    /**
     * @param string $meleeWeaponValue
     * @param WeaponCategoryCode $weaponCategoryCode
     * @throws \DrdPlus\Codes\Armaments\Exceptions\RangedWeaponIsAlreadyInDifferentWeaponCategory
     */
    private static function guardSameCategory(string $meleeWeaponValue, WeaponCategoryCode $weaponCategoryCode)
    {
        if (!in_array($meleeWeaponValue, self::$customRangedWeaponCodePerCategory[$weaponCategoryCode->getValue()] ?? [], true)) {
            $alreadyUsedCategory = null;
            foreach (WeaponCategoryCode::getPossibleValues() as $anotherCategory) {
                if ($anotherCategory !== $weaponCategoryCode->getValue()
                    && in_array($meleeWeaponValue, self::$customRangedWeaponCodePerCategory[$anotherCategory] ?? [], true)
                ) {
                    $alreadyUsedCategory = $anotherCategory;
                }
            }
            throw new Exceptions\RangedWeaponIsAlreadyInDifferentWeaponCategory(
                "Can not register new ranged weapon '$meleeWeaponValue' into category '$weaponCategoryCode'"
                . " because is already registered in category '$alreadyUsedCategory'"
            );
        }
    }

    /**
     * @return bool
     */
    public function isMelee(): bool
    {
        return $this->getValue() === self::SPEAR; // spear can be used both as a range and melee weapon
    }

    /**
     * @return bool
     */
    final public function isRanged(): bool
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isBow(): bool
    {
        return in_array($this->getValue(), self::getBowsValues(), true);
    }

    /**
     * @return bool
     */
    public function isCrossbow(): bool
    {
        return in_array($this->getValue(), self::getCrossbowsValues(), true);
    }

    /**
     * @return bool
     */
    public function isThrowingWeapon(): bool
    {
        return in_array($this->getValue(), self::getThrowingWeaponsValues(), true);
    }

    /**
     * @return bool
     */
    public function isShootingWeapon(): bool
    {
        return $this->isBow() || $this->isCrossbow();
    }

    /**
     * @return MeleeWeaponCode
     * @throws \DrdPlus\Codes\Armaments\Exceptions\CanNotBeConvertedToMeleeWeaponCode
     */
    public function convertToMeleeWeaponCodeEquivalent(): MeleeWeaponCode
    {
        if (!$this->isMelee()) {
            throw new Exceptions\CanNotBeConvertedToMeleeWeaponCode(
                "Range weapon code {$this} can not be converted to melee weapon code"
            );
        }

        return MeleeWeaponCode::getIt($this->getValue());
    }

    /**
     * @return RangedWeaponCode
     */
    public function convertToRangedWeaponCodeEquivalent(): RangedWeaponCode
    {
        return $this;
    }

    /**
     * There is currently no ranged weapon which left your hand empty.
     *
     * @return bool
     */
    public function isUnarmed(): bool
    {
        return false;
    }

    /**
     * @return array|string[]
     */
    protected function fetchTranslations(): array
    {
        return [
            'en' => [
                self::SHORT_BOW => ['one' => 'short bow', 'few' => 'short bows', 'many' => 'short bows'],
                self::LONG_BOW => ['one' => 'long bow', 'few' => 'long bows', 'many' => 'long bows'],
                self::SHORT_COMPOSITE_BOW => ['one' => 'short composite bow', 'few' => 'short composite bows', 'many' => 'short composite bows'],
                self::LONG_COMPOSITE_BOW => ['one' => 'long composite bow', 'few' => 'long composite bows', 'many' => 'long composite bows'],
                self::POWER_BOW => ['one' => 'power bow', 'few' => 'power bows', 'many' => 'power bows'],
                self::MINICROSSBOW => ['one' => 'minicrossbow', 'few' => 'minicrossbows', 'many' => 'minicrossbows'],
                self::LIGHT_CROSSBOW => ['one' => 'light crossbow', 'few' => 'light crossbows', 'many' => 'light crossbows'],
                self::MILITARY_CROSSBOW => ['one' => 'military crossbow', 'few' => 'military crossbows', 'many' => 'military crossbows'],
                self::HEAVY_CROSSBOW => ['one' => 'heavy crossbow', 'few' => 'heavy crossbows', 'many' => 'heavy crossbows'],
                self::SAND => ['one' => 'sand', 'few' => 'sands', 'many' => 'sands'],
                self::ROCK => ['one' => 'rock', 'few' => 'rocks', 'many' => 'rocks'],
                self::THROWING_DAGGER => ['one' => 'throwing dagger', 'few' => 'throwing daggers', 'many' => 'throwing daggers'],
                self::LIGHT_THROWING_AXE => ['one' => 'light throwing axe', 'few' => 'light throwing axes', 'many' => 'light throwing axes'],
                self::WAR_THROWING_AXE => ['one' => 'war throwing axe', 'few' => 'war throwing axes', 'many' => 'war throwing axes'],
                self::THROWING_HAMMER => ['one' => 'throwing hammer', 'few' => 'throwing hammers', 'many' => 'throwing hammers'],
                self::SHURIKEN => ['one' => 'shuriken', 'few' => 'shurikens', 'many' => 'shurikens'],
                self::SPEAR => ['one' => 'spear', 'few' => 'spears', 'many' => 'spears'],
                self::JAVELIN => ['one' => 'javelin', 'few' => 'javelins', 'many' => 'javelins'],
                self::SLING => ['one' => 'sling', 'few' => 'slings', 'many' => 'slings'],
            ],
            'cs' => [
                self::SHORT_BOW => ['one' => 'krátký luk', 'few' => 'krátké luky', 'many' => 'krátkých luků'],
                self::LONG_BOW => ['one' => 'dlouhý luk', 'few' => 'dlouhé luky', 'many' => 'dlouhých luků'],
                self::SHORT_COMPOSITE_BOW => ['one' => 'krátký skládaný luk', 'few' => 'krátké skládané luky', 'many' => 'krátkých skládaných luků'],
                self::LONG_COMPOSITE_BOW => ['one' => 'dlouhý skládaný luk', 'few' => 'dlouhé skládané luky', 'many' => 'dlouhých skládaných luků'],
                self::POWER_BOW => ['one' => 'silový luk', 'few' => 'silové luky', 'many' => 'silových luků'],
                self::MINICROSSBOW => ['one' => 'minikuše', 'few' => 'minikuše', 'many' => 'minikuší'],
                self::LIGHT_CROSSBOW => ['one' => 'lehká kuše', 'few' => 'lehké kuše', 'many' => 'lehkých kuší'],
                self::MILITARY_CROSSBOW => ['one' => 'válečná kuše', 'few' => 'válečné kuše', 'many' => 'válečných kuší'],
                self::HEAVY_CROSSBOW => ['one' => 'těžká kuše', 'few' => 'těžké kuše', 'many' => 'těžkých kuší'],
                self::SAND => ['one' => 'písek', 'few' => 'písky', 'many' => 'písků'],
                self::ROCK => ['one' => 'kámen', 'few' => 'kameny', 'many' => 'kamenů'],
                self::THROWING_DAGGER => ['one' => 'vrhací dýka', 'few' => 'vrhací dýky', 'many' => 'vrhacích dýk'],
                self::LIGHT_THROWING_AXE => ['one' => 'lehká vrhací sekera', 'few' => 'lehké vrhací sekery', 'many' => 'lehkých vrhacích seker'],
                self::WAR_THROWING_AXE => ['one' => 'válečná vrhací sekera', 'few' => 'válečné vrhací sekery', 'many' => 'válečných vrhacích seker'],
                self::THROWING_HAMMER => ['one' => 'vrhací kladivo', 'few' => 'vrhací kladiva', 'many' => 'vrhacích kladiv'],
                self::SHURIKEN => ['one' => 'hvězdice', 'few' => 'hvězdice', 'many' => 'hvězdic'],
                self::SPEAR => ['one' => 'kopí', 'few' => 'kopí', 'many' => 'kopí'],
                self::JAVELIN => ['one' => 'oštěp', 'few' => 'oštěpy', 'many' => 'oštěpů'],
                self::SLING => ['one' => 'prak', 'few' => 'praky', 'many' => 'praků'],
            ],
        ];
    }
}