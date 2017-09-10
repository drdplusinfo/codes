<?php
namespace DrdPlus\Codes\Armaments;

use DrdPlus\Codes\Partials\TranslatableExtendableCode;

/**
 * @method static ShieldCode getIt($codeValue)
 */
class ShieldCode extends TranslatableExtendableCode implements MeleeWeaponlikeCode, ProtectiveArmamentCode
{
    const WITHOUT_SHIELD = 'without_shield';
    const BUCKLER = 'buckler';
    const SMALL_SHIELD = 'small_shield';
    const MEDIUM_SHIELD = 'medium_shield';
    const HEAVY_SHIELD = 'heavy_shield';
    const PAVISE = 'pavise';

    /**
     * @return array|string[]
     */
    protected static function getDefaultValues(): array
    {
        return [
            self::WITHOUT_SHIELD,
            self::BUCKLER,
            self::SMALL_SHIELD,
            self::MEDIUM_SHIELD,
            self::HEAVY_SHIELD,
            self::PAVISE,
        ];
    }

    /**
     * @param string $newShieldCodeValue
     * @param array $translations
     * @return bool
     * @throws \DrdPlus\Codes\Partials\Exceptions\InvalidLanguageCode
     * @throws \DrdPlus\Codes\Partials\Exceptions\UnknownTranslationPlural
     * @throws \DrdPlus\Codes\Partials\Exceptions\InvalidTranslationFormat
     */
    public static function addNewShieldCode(string $newShieldCodeValue, array $translations): bool
    {
        return static::addNewCode($newShieldCodeValue, $translations);
    }

    /**
     * @return bool
     */
    public function isProtectiveArmament(): bool
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isArmor(): bool
    {
        return false;
    }

    /**
     * @return bool
     */
    public function isMelee(): bool
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isWeaponlike(): bool
    {
        return true;
    }

    /**
     * Shield CAN be used as a weapon (is weapon-like), but it is NOT a standard weapon (is not a weapon)
     *
     * @return bool
     */
    public function isWeapon(): bool
    {
        return false;
    }

    /**
     * @return bool
     */
    final public function isShield(): bool
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isMeleeWeapon(): bool
    {
        return false;
    }

    /**
     * @return bool
     */
    public function isRanged(): bool
    {
        return false;
    }

    /**
     * @return bool
     */
    public function isShootingWeapon(): bool
    {
        return false;
    }

    /**
     * @return bool
     */
    public function isThrowingWeapon(): bool
    {
        return false;
    }

    /**
     * @return bool
     */
    public function isProjectile(): bool
    {
        return false;
    }

    /**
     * @throws Exceptions\CanNotBeConvertedToMeleeWeaponCode
     */
    public function convertToMeleeWeaponCodeEquivalent(): MeleeWeaponCode
    {
        throw new Exceptions\CanNotBeConvertedToMeleeWeaponCode(
            "No shield code (current is {$this}) can not be converted to melee weapon code"
        );
    }

    /**
     * @throws Exceptions\CanNotBeConvertedToRangeWeaponCode
     */
    public function convertToRangedWeaponCodeEquivalent(): RangedWeaponCode
    {
        throw new Exceptions\CanNotBeConvertedToRangeWeaponCode(
            "No shield code (current is {$this}) can not be converted to range weapon code"
        );
    }

    /**
     * @return bool
     */
    public function isUnarmed(): bool
    {
        return $this->getValue() === self::WITHOUT_SHIELD;
    }

    protected function fetchTranslations(): array
    {
        return [
            'en' => [
                self::WITHOUT_SHIELD => ['one' => 'without shield'],
                self::BUCKLER => ['one' => 'buckler'],
                self::SMALL_SHIELD => ['one' => 'small shield'],
                self::MEDIUM_SHIELD => ['one' => 'medium shield'],
                self::HEAVY_SHIELD => ['one' => 'heavy shield'],
                self::PAVISE => ['one' => 'pavise'],
            ],
            'cs' => [
                self::WITHOUT_SHIELD => ['one' => 'bez štítu'],
                self::BUCKLER => ['one' => 'pěstní štítek'],
                self::SMALL_SHIELD => ['one' => 'malý štít'],
                self::MEDIUM_SHIELD => ['one' => 'střední štít'],
                self::HEAVY_SHIELD => ['one' => 'velký štít'],
                self::PAVISE => ['one' => 'pavéza'],
            ],
        ];
    }

}