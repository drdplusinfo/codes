<?php
namespace DrdPlus\Codes\Body;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static AfflictionByWoundDomainCode getIt($codeValue)
 */
class AfflictionByWoundDomainCode extends AbstractCode
{
    public const PHYSICAL = 'physical';
    public const PSYCHICAL = 'psychical';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues(): array
    {
        return [
            self::PHYSICAL,
            self::PSYCHICAL,
        ];
    }

}