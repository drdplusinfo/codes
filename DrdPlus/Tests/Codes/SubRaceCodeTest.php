<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\RaceCode;
use DrdPlus\Codes\SubRaceCode;

class SubRaceCodeTest extends AbstractCodeTest
{
    /**
     * @test
     */
    public function I_can_get_races_to_sub_races_codes(): void
    {
        self::assertEquals($this->getExpectedRacesToSubRaces(), SubRaceCode::getRaceToSubRaceValues());
        self::assertSame(
            SubRaceCode::getPossibleValues(),
            array_merge(array_unique($this->toFlatValues(SubRaceCode::getRaceToSubRaceValues())))
        );
        self::assertEquals(RaceCode::getPossibleValues(), array_keys(SubRaceCode::getRaceToSubRaceValues()));
    }

    /**
     * @return array|string[][]
     */
    private function getExpectedRacesToSubRaces(): array
    {
        return [
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
        ];
    }

    /**
     * @param array|string[][] $tableLike
     * @return array
     */
    private function toFlatValues(array $tableLike): array
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
    public function I_can_easily_find_out_if_sub_race_belongs_to_race(): void
    {
        foreach ($this->getExpectedRacesToSubRaces() as $race => $subRaces) {
            $raceCode = RaceCode::getIt($race);
            foreach ($subRaces as $subRace) {
                $subRaceCode = SubRaceCode::getIt($subRace);
                self::assertTrue($subRaceCode->isRace($raceCode), "Sub-race '{$subRace}' should belongs to race '{$race}'");
                $otherRaces = \array_diff(RaceCode::getPossibleValues(), [$race]);
                foreach ($otherRaces as $otherRace) {
                    $hasSubRace = \in_array($subRace, $this->getExpectedRacesToSubRaces()[$otherRace], true) !== false;
                    $otherRaceCode = RaceCode::getIt($otherRace);
                    self::assertSame(
                        $hasSubRace,
                        $subRaceCode->isRace($otherRaceCode),
                        "Sub-race '{$subRace}' should " . ($hasSubRace ? '' : 'not ') . "belongs to race '{$otherRace}'"
                    );
                }
            }
        }
    }
}