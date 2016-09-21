<?php
namespace DrdPlus\Codes;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static AfflictionByWoundDomainCode getIt($codeValue)
 */
class AfflictionByWoundDomainCode extends AbstractCode
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
            self::PSYCHICAL,
        ];
    }

}