<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\RaceCode;
use DrdPlus\Codes\SubRaceCode;

class SubRaceCodeTest extends CodeTest
{
    /**
     * @test
     */
    public function I_can_get_races_to_sub_races_codes()
    {
        self::assertEquals(
            [
                'human' => [
                    'common',
                    'highlander',
                ],
                'elf' => [
                    'common',
                    'green',
                    'dark',
                ],
                'dwarf' => [
                    'common',
                    'wood',
                    'mountain',
                ],
                'hobbit' => [
                    'common',
                ],
                'kroll' => [
                    'common',
                    'wild',
                ],
                'orc' => [
                    'common',
                    'skurut',
                    'goblin',
                ],
            ],
            SubRaceCode::getRaceToSubRaceCodes()
        );
        self::assertSame(
            SubRaceCode::getSubRaceCodes(),
            array_merge(array_unique($this->toFlatValues(SubRaceCode::getRaceToSubRaceCodes())))
        );
        self::assertEquals(
            RaceCode::getRaceCodes(),
            array_keys(SubRaceCode::getRaceToSubRaceCodes())
        );
    }

    /**
     * @param array|string[][] $tableLike
     * @return array
     */
    private function toFlatValues(array $tableLike)
    {
        $flat = [];
        /** @var string[] $row */
        foreach ($tableLike as $row) {
            foreach ($row as $value) {
                $flat[] = $value;
            }
        }

        return $flat;
    }

    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
    {
        self::assertSame(
            [
                'common',
                'highlander',
                'green',
                'dark',
                'wood',
                'mountain',
                'wild',
                'skurut',
                'goblin',
            ],
            SubRaceCode::getSubRaceCodes()
        );
    }

}