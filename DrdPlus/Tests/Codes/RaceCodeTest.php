<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\RaceCode;

class RaceCodeTest extends CodeTest
{
    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
    {
        $this->I_can_get_race_codes();
        $this->I_cant_get_subrace_codes();
    }

    private function I_can_get_race_codes()
    {
        self::assertEquals(
            $expectedCodes = [
                'human',
                'elf',
                'dwarf',
                'hobbit',
                'kroll',
                'orc',
            ],
            RaceCode::getRaceCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }

    private function I_cant_get_subrace_codes()
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
            RaceCode::getSubRaceCodes()
        );
        $reflection = new \ReflectionClass(RaceCode::class);
        self::assertSame(
            array_values($reflection->getConstants()),
            array_merge(array_unique($this->keysToFlatValues(RaceCode::getSubRaceCodes())))
        );
        self::assertEquals(
            RaceCode::getRaceCodes(),
            array_keys(RaceCode::getSubRaceCodes())
        );
    }

    private function keysToFlatValues(array $tableLike)
    {
        $flat = [];
        foreach ($tableLike as $key => $row) {
            array_unshift($row, $key);
            foreach ($row as $value) {
                $flat[] = $value;
            }
        }

        return $flat;
    }

    /**
     * @test
     */
    public function All_constants_can_be_given_by_getter()
    {
        $constantValues = (new \ReflectionClass(RaceCode::class))->getConstants();
        sort($constantValues); // re-index by numbers
        $givenValues = RaceCode::getRaceCodes();
        foreach (RaceCode::getSubRaceCodes() as $singleRaceSubRaceCodes) {
            foreach ($singleRaceSubRaceCodes as $singleRaceSubRaceCode) {
                $givenValues[] = $singleRaceSubRaceCode;
            }
        }
        $givenValues = array_unique($givenValues);
        sort($givenValues);
        self::assertSame($constantValues, $givenValues);
    }

}
