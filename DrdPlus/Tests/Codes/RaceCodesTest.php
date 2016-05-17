<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\RaceCodes;

class RaceCodesTest extends AbstractCodesTest
{
    /**
     * @test
     */
    public function I_can_get_race_codes()
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
            RaceCodes::getRaceCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }

    /**
     * @test
     */
    public function I_cant_get_subrace_codes()
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
            RaceCodes::getSubRaceCodes()
        );
        $reflection = new \ReflectionClass(RaceCodes::class);
        self::assertSame(
            array_values($reflection->getConstants()),
            array_merge(array_unique($this->keysToFlatValues(RaceCodes::getSubRaceCodes())))
        );
        self::assertEquals(
            RaceCodes::getRaceCodes(),
            array_keys(RaceCodes::getSubRaceCodes())
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
}
