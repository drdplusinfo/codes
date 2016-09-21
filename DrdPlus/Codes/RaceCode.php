<?php
namespace DrdPlus\Codes;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static RaceCode getIt($codeValue)
 */
class RaceCode extends AbstractCode
{
    const HUMAN = 'human';
    const ELF = 'elf';
    const DWARF = 'dwarf';
    const HOBBIT = 'hobbit';
    const KROLL = 'kroll';
    const ORC = 'orc';

    /**
     * @return array|string[]
     */
    public static function getRaceCodes()
    {
        return [
            self::HUMAN,
            self::ELF,
            self::DWARF,
            self::HOBBIT,
            self::KROLL,
            self::ORC,
        ];
    }
}