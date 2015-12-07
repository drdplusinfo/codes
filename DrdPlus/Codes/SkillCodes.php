<?php
namespace DrdPlus\Codes;

class SkillCodes
{
    // groups
    const PHYSICAL = 'physical';
    const PSYCHICAL = 'psychical';
    const COMBINED = 'combined';

    /**
     * @return array|string[]
     */
    public static function getGroups()
    {
        return [self::PHYSICAL, self::PSYCHICAL, self::COMBINED];
    }
}
