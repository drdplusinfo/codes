<?php
namespace DrdPlus\Codes;

class AfflictionByWoundDomainCodes
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