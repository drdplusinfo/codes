<?php
namespace DrdPlus\Codes\Body;

/**
 * @method static SeriousWoundOriginCode getIt($codeValue)
 */
class SeriousWoundOriginCode extends WoundOriginCode
{
    public const MECHANICAL_STAB = 'mechanical_stab';
    public const MECHANICAL_CUT = 'mechanical_cut';
    public const MECHANICAL_CRUSH = 'mechanical_crush';
    public const ELEMENTAL = 'elemental';
    public const PSYCHICAL = 'psychical';

    /**
     * @return SeriousWoundOriginCode
     */
    public static function getMechanicalStabWoundOrigin(): SeriousWoundOriginCode
    {
        return static::getIt(self::MECHANICAL_STAB);
    }

    /**
     * @return SeriousWoundOriginCode
     */
    public static function getMechanicalCutWoundOrigin(): SeriousWoundOriginCode
    {
        return static::getIt(self::MECHANICAL_CUT);
    }

    /**
     * @return SeriousWoundOriginCode
     */
    public static function getMechanicalCrushWoundOrigin(): SeriousWoundOriginCode
    {
        return static::getIt(self::MECHANICAL_CRUSH);
    }

    /**
     * @return SeriousWoundOriginCode
     */
    public static function getElementalWoundOrigin(): SeriousWoundOriginCode
    {
        return static::getIt(self::ELEMENTAL);
    }

    /**
     * @return SeriousWoundOriginCode
     */
    public static function getPsychicalWoundOrigin(): SeriousWoundOriginCode
    {
        return static::getIt(self::PSYCHICAL);
    }

    /**
     * @return bool
     */
    public function isSeriousWoundOrigin(): bool
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isOrdinaryWoundOrigin(): bool
    {
        return false;
    }

    /**
     * @return bool
     */
    public function isPsychical(): bool
    {
        return $this->getValue() === self::PSYCHICAL;
    }

    /**
     * @return bool
     */
    public function isElemental(): bool
    {
        return $this->getValue() === self::ELEMENTAL;
    }

    /**
     * @return bool
     */
    public function isMechanical(): bool
    {
        return \in_array($this->getValue(), [self::MECHANICAL_STAB, self::MECHANICAL_CUT, self::MECHANICAL_CRUSH], true);
    }

    /**
     * @return bool
     */
    public function isMechanicalStabWoundOrigin(): bool
    {
        return $this->getValue() === self::MECHANICAL_STAB;
    }

    /**
     * @return bool
     */
    public function isMechanicalCutWoundOrigin(): bool
    {
        return $this->getValue() === self::MECHANICAL_CUT;
    }

    /**
     * @return bool
     */
    public function isMechanicalCrushWoundOrigin(): bool
    {
        return $this->getValue() === self::MECHANICAL_CRUSH;
    }

    /**
     * @return bool
     */
    public function isElementalWoundOrigin(): bool
    {
        return $this->getValue() === self::ELEMENTAL;
    }

    /**
     * @return bool
     */
    public function isPsychicalWoundOrigin(): bool
    {
        return $this->getValue() === self::PSYCHICAL;
    }

    protected function fetchTranslations(): array
    {
        return [
            'cs' => [
                self::ELEMENTAL => ['one' => 'elementální'],
                self::PSYCHICAL => ['one' => 'psychické'],
                self::MECHANICAL_CRUSH => ['one' => 'fyzické drtivé'],
                self::MECHANICAL_CUT => ['one' => 'fyzické řezné'],
                self::MECHANICAL_STAB => ['one' => 'fyzické bodné'],
            ],
            'en' => [
                self::ELEMENTAL => ['one' => 'elemental'],
                self::PSYCHICAL => ['one' => 'psychical'],
                self::MECHANICAL_CRUSH => ['one' => 'mechanical crush'],
                self::MECHANICAL_CUT => ['one' => 'mechanical cut'],
                self::MECHANICAL_STAB => ['one' => 'mechanical stab'],
            ],
        ];
    }

}