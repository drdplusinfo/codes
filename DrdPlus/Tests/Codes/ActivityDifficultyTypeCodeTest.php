<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\ActivityDifficultyTypeCode;

class ActivityDifficultyTypeCodeTest extends AbstractCodesTest
{
    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
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
            ActivityDifficultyTypeCode::getActivityDifficultyTypeCodes()
        );

        $this->I_can_get_codes_by_same_named_constants($expectedActivityCodes);
    }
}
