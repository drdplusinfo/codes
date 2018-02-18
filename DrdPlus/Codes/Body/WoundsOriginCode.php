<?php
namespace DrdPlus\Codes\Body;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static WoundsOriginCode getIt($codeValue)
 */
class WoundsOriginCode extends AbstractCode
{
    public const PSYCHICAL = 'psychical';
    public const ELEMENTAL = 'elemental';
    public const MECHANICAL_STAB = 'mechanical_stab';
    public const MECHANICAL_CUT = 'mechanical_cut';
    public const MECHANICAL_CRUSH = 'mechanical_crush';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues(): array
    {
        return [
            self::PSYCHICAL,
            self::ELEMENTAL,
            self::MECHANICAL_STAB,
            self::MECHANICAL_CUT,
            self::MECHANICAL_CRUSH,
        ];
    }

    /**
     * @return bool
     */
    public function isPsychical()
    {
        return $this->getValue() === self::PSYCHICAL;
    }

    /**
     * @return bool
     */
    public function isElemental()
    {
        return $this->getValue() === self::ELEMENTAL;
    }

    /**
     * @return bool
     */
    public function isMechanical()
    {
        return \in_array($this->getValue(), [self::MECHANICAL_STAB, self::MECHANICAL_CUT, self::MECHANICAL_CRUSH], true);
    }
}