<?php
namespace DrdPlus\Codes;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static ProfessionCode getIt($codeValue)
 */
class ProfessionCode extends AbstractCode
{
    const COMMONER = 'commoner';
    const FIGHTER = 'fighter';
    const THIEF = 'thief';
    const RANGER = 'ranger';
    const WIZARD = 'wizard';
    const THEURGIST = 'theurgist';
    const PRIEST = 'priest';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues(): array
    {
        return [
            self::COMMONER,
            self::FIGHTER,
            self::THIEF,
            self::RANGER,
            self::WIZARD,
            self::THEURGIST,
            self::PRIEST,
        ];
    }

}