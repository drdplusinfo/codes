<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\ActivityDifficultyTypeCodes;

class ActivityDifficultyTypeCodesTest extends AbstractCodesTableTest
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
            ActivityDifficultyTypeCodes::getActivityDifficultyTypeCodes()
        );

        $this->I_can_get_codes_as_constants($expectedActivityCodes);
    }
}
