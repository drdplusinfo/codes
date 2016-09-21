<?php
namespace DrdPlus\Codes\Skills;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static SkillTypeCode getIt($codeValue)
 */
class SkillTypeCode extends AbstractCode
{
    const PHYSICAL = 'physical';
    const PSYCHICAL = 'psychical';
    const COMBINED = 'combined';

    /**
     * @return array|string[]
     */
    public static function getSkillTypeCodes()
    {
        return [self::PHYSICAL, self::PSYCHICAL, self::COMBINED];
    }
}