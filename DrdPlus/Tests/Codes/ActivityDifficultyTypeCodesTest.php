<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\ActivityDifficultyTypeCodes;

class ActivityDifficultyTypeCodesTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function I_can_get_all_activity_codes()
    {
        self::assertSame(
            $expectedActivityCodes = [
                'sleeping_or_rest_in_bed',
                'lounging_and_resting',
                'light_activity',
                'normal_activity',
                'toilsome_activity',
                'very_hard_activity',
            ],
            ActivityDifficultyTypeCodes::getActivityTypeCodes()
        );

        $reflection = new \ReflectionClass(ActivityDifficultyTypeCodes::class);
        $constants = $reflection->getConstants();
        foreach ($expectedActivityCodes as $expectedActivityCode) {
            $constantName = strtoupper($expectedActivityCode);
            self::assertArrayHasKey($constantName, $constants);
            self::assertSame($constants[$constantName], $expectedActivityCode);
        }
    }
}
