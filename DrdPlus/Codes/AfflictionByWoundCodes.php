<?php
namespace DrdPlus\Codes;

class AfflictionByWoundCodes
{
    const PHYSICAL = 'physical';
    const PSYCHICAL = 'psychical';

    /**
     * @return array|string[]
     */
    public static function getAfflictionDomainCodes()
    {
        return [
            self::PHYSICAL,
            self::PSYCHICAL
        ];
    }

}