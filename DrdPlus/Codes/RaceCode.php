<?php
namespace DrdPlus\Codes;

/**
 * @method static RaceCode getIt($codeValue)
 */
class RaceCode extends Code
{
    const HUMAN = 'human';
    const COMMON = 'common';
    const HIGHLANDER = 'highlander';

    const ELF = 'elf';
    // + common
    const GREEN = 'green';
    const DARK = 'dark';

    const DWARF = 'dwarf';
    // + common
    const WOOD = 'wood';
    const MOUNTAIN = 'mountain';

    const HOBBIT = 'hobbit';
    // + common

    const KROLL = 'kroll';
    // + common
    const WILD = 'wild';

    const ORC = 'orc';
    // + common
    const SKURUT = 'skurut';
    const GOBLIN = 'goblin';

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

    /**
     * @return array|string[][]
     */
    public static function getSubRaceCodes()
    {
        return [
            self::HUMAN => [
                self::COMMON,
                self::HIGHLANDER,
            ],
            self::ELF => [
                self::COMMON,
                self::GREEN,
                self::DARK,
            ],
            self::DWARF => [
                self::COMMON,
                self::WOOD,
                self::MOUNTAIN,
            ],
            self::HOBBIT => [
                self::COMMON,
            ],
            self::KROLL => [
                self::COMMON,
                self::WILD,
            ],
            self::ORC => [
                self::COMMON,
                self::SKURUT,
                self::GOBLIN,
            ],
        ];
    }
}
