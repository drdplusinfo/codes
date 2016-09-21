<?php
namespace DrdPlus\Codes;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static WoundsOriginCode getIt($codeValue)
 */
class WoundsOriginCode extends AbstractCode
{
    const PSYCHICAL = 'psychical';
    const ELEMENTAL = 'elemental';
    const MECHANICAL_STAB = 'mechanical_stab';
    const MECHANICAL_CUT = 'mechanical_cut';
    const MECHANICAL_CRUSH = 'mechanical_crush';

    /**
     * @return array|string[]
     */
    public static function getWoundsOriginCodes()
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
        return in_array($this->getValue(), [self::MECHANICAL_STAB, self::MECHANICAL_CUT, self::MECHANICAL_CRUSH], true);
    }
}