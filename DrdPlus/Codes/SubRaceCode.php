<?php
namespace DrdPlus\Codes;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static SubRaceCode getIt($codeValue)
 * @method static SubRaceCode findIt($codeValue)
 */
class SubRaceCode extends AbstractCode
{
    // human
    public const COMMON = 'common';
    public const HIGHLANDER = 'highlander';

    // elf
    // + common
    public const GREEN = 'green';
    public const DARK = 'dark';

    // dwarf
    // + common
    public const WOOD = 'wood';
    public const MOUNTAIN = 'mountain';

    // hobbit
    // + common

    // kroll
    // + common
    public const WILD = 'wild';

    // orc
    // + common
    public const SKURUT = 'skurut';
    public const GOBLIN = 'goblin';

    /**
     * @return array|string[][]
     */
    public static function getRaceToSubRaceValues(): array
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
    public static function getPossibleValues(): array
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

    /**
     * @param RaceCode $raceCode
     * @return bool
     */
    public function isRace(RaceCode $raceCode): bool
    {
        return \in_array($this->getValue(), static::getRaceToSubRaceValues()[$raceCode->getValue()] ?? [], true);
    }
}