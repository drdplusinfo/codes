<?php
namespace DrdPlus\Codes;

/**
 * @method static SubRaceCode getIt($codeValue)
 */
class SubRaceCode extends Code
{
    // human
    const COMMON = 'common';
    const HIGHLANDER = 'highlander';

    // elf
    // + common
    const GREEN = 'green';
    const DARK = 'dark';

    // dwarf
    // + common
    const WOOD = 'wood';
    const MOUNTAIN = 'mountain';

    // hobbit
    // + common

    // kroll
    // + common
    const WILD = 'wild';

    // orc
    // + common
    const SKURUT = 'skurut';
    const GOBLIN = 'goblin';

    /**
     * @return array|string[][]
     */
    public static function getRaceToSubRaceCodes()
    {
        return [
            RaceCode::HUMAN => [
                self::COMMON,
                self::HIGHLANDER,
            ],
            RaceCode::ELF => [
                self::COMMON,
                self::GREEN,
                self::DARK,
            ],
            RaceCode::DWARF => [
                self::COMMON,
                self::WOOD,
                self::MOUNTAIN,
            ],
            RaceCode::HOBBIT => [
                self::COMMON,
            ],
            RaceCode::KROLL => [
                self::COMMON,
                self::WILD,
            ],
            RaceCode::ORC => [
                self::COMMON,
                self::SKURUT,
                self::GOBLIN,
            ],
        ];
    }

    /**
     * @return array|string[]
     */
    public static function getSubRaceCodes()
    {
        return [
            self::COMMON,
            self::HIGHLANDER,
            self::GREEN,
            self::DARK,
            self::WOOD,
            self::MOUNTAIN,
            self::WILD,
            self::SKURUT,
            self::GOBLIN,
        ];
    }
}