<?php
namespace DrdPlus\Codes;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static RaceCode getIt($codeValue)
 */
class RaceCode extends AbstractCode
{
    public const HUMAN = 'human';
    public const ELF = 'elf';
    public const DWARF = 'dwarf';
    public const HOBBIT = 'hobbit';
    public const KROLL = 'kroll';
    public const ORC = 'orc';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues(): array
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