<?php
namespace DrdPlus\Codes;

class ProfessionCodes
{
    const FIGHTER = 'fighter';
    const WIZARD = 'wizard';
    const PRIEST = 'priest';
    const THEURGIST = 'theurgist';
    const RANGER = 'ranger';
    const THIEF = 'thief';

    /**
     * @return array|string[]
     */
    public static function getProfessionCodes()
    {
        return [
            self::FIGHTER,
            self::WIZARD,
            self::PRIEST,
            self::THEURGIST,
            self::RANGER,
            self::THIEF
        ];
    }

}
