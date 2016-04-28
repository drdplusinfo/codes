<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\AfflictionByWoundCodes;

class AfflictionByWoundCodesTest extends AbstractCodesTableTest
{
    /**
     * @test
     */
    public function I_can_get_affliction_codes()
    {
        self::assertSame(
            $expectedCodes = ['physical', 'psychical'],
            AfflictionByWoundCodes::getAfflictionDomainCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }
}
