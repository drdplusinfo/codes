<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\RaceCode;
use DrdPlus\Codes\SubRaceCode;

class SubRaceCodeTest extends AbstractCodeTest
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
            SubRaceCode::getRaceToSubRaceValues()
        );
        self::assertSame(
            SubRaceCode::getPossibleValues(),
            array_merge(array_unique($this->toFlatValues(SubRaceCode::getRaceToSubRaceValues())))
        );
        self::assertEquals(
            RaceCode::getPossibleValues(),
            array_keys(SubRaceCode::getRaceToSubRaceValues())
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

}