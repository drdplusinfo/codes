<?php
namespace DrdPlus\Codes;

class ProfessionCodes
{
    const FIGHTER = 'fighter';
    const THIEF = 'thief';
    const RANGER = 'ranger';
    const WIZARD = 'wizard';
    const THEURGIST = 'theurgist';
    const PRIEST = 'priest';

    /**
     * @return array|string[]
     */
    public static function getProfessionCodes()
    {
        return [
            self::FIGHTER,
            self::THIEF,
            self::RANGER,
            self::WIZARD,
            self::THEURGIST,
            self::PRIEST,
        ];
    }

}
