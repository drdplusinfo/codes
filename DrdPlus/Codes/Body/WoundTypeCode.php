<?php
namespace DrdPlus\Codes\Body;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static WoundTypeCode getIt($codeValue)
 */
class WoundTypeCode extends AbstractCode
{
    const CRUSH = 'crush';
    const STAB = 'stab';
    const CUT = 'cut';

    /**
     * @return array|string
     */
    public static function getPossibleValues()
    {
        return [
            self::CRUSH,
            self::STAB,
            self::CUT,
        ];
    }

    /**
     * @return bool
     */
    public function isCrush()
    {
        return $this->getValue() === self::CRUSH;
    }

    /**
     * @return bool
     */
    public function isStab()
    {
        return $this->getValue() === self::STAB;
    }

    /**
     * @return bool
     */
    public function isCut()
    {
        return $this->getValue() === self::CUT;
    }
}