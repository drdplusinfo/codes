<?php
namespace DrdPlus\Codes;

class SkillCodes
{
    // types
    const PHYSICAL = 'physical';
    const PSYCHICAL = 'psychical';
    const COMBINED = 'combined';

    /**
     * @return array|string[]
     */
    public static function getSkillTypes()
    {
        return [self::PHYSICAL, self::PSYCHICAL, self::COMBINED];
    }
}
