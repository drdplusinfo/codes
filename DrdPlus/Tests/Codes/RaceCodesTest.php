<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\RaceCodes;

class RaceCodesTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function I_can_get_race_codes_at_once()
    {
        $this->assertEquals(
            [
                'human',
                'elf',
                'dwarf',
                'hobbit',
                'kroll',
                'orc',
            ],
            RaceCodes::getRaceCodes()
        );
    }

    /**
     * @test
     */
    public function I_cant_get_subrace_codes()
    {
        $this->assertEquals(
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
        $reflection = new \ReflectionClass(RaceCodes::getClass());
        $this->assertSame(
            array_values($reflection->getConstants()),
            array_merge(array_unique($this->keysToFlatValues(RaceCodes::getSubRaceCodes())))
        );
        $this->assertEquals(
            RaceCodes::getRaceCodes(),
            array_keys(RaceCodes::getSubRaceCodes())
        );
    }

    private function keysToFlatValues(array $tableLike)
    {
        $flat = [];
        foreach ($tableLike as $key => $row) {
            array_unshift($row, $key);
            $flat = array_merge($flat, $row);
        }

        return $flat;
    }
}
