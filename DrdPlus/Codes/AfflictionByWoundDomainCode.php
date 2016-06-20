<?php
namespace DrdPlus\Codes;

class AfflictionByWoundDomainCode extends Code
{
    const PHYSICAL = 'physical';
    const PSYCHICAL = 'psychical';

    /**
     * @return array|string[]
     */
    public static function getAfflictionByWoundDomainCodes()
    {
        return [
            self::PHYSICAL,
            self::PSYCHICAL
        ];
    }

}