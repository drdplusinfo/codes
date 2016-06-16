<?php
namespace DrdPlus\Codes;

class AfflictionByWoundDomainCode extends Code
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