<?php
namespace DrdPlus\Tests\Codes\Body;

use DrdPlus\Codes\Body\ActivityAffectingHealingCode;
use DrdPlus\Tests\Codes\CodeTest;

class ActivityAffectingHealingCodeTest extends CodeTest
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
            ActivityAffectingHealingCode::getActivityAffectingHealingCodes()
        );

        $this->I_can_get_codes_by_same_named_constants($expectedActivityCodes);
    }
}