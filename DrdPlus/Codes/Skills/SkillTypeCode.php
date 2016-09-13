<?php
namespace DrdPlus\Codes\Skills;
use DrdPlus\Codes\Code;

/**
 * @method static SkillTypeCode getIt($codeValue)
 */
class SkillTypeCode extends Code
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