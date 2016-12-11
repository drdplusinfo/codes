<?php
namespace DrdPlus\Codes\Body;

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
    public static function getPossibleValues()
    {
        return [
            self::PHYSICAL,
            self::PSYCHICAL,
        ];
    }

}