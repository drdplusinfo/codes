<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\AfflictionByWoundDomainCodes;

class AfflictionByWoundDomainCodesTest extends AbstractCodesTableTest
{
    /**
     * @test
     */
    public function I_can_get_affliction_codes()
    {
        self::assertSame(
            $expectedCodes = ['physical', 'psychical'],
            AfflictionByWoundDomainCodes::getAfflictionDomainCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }
}
