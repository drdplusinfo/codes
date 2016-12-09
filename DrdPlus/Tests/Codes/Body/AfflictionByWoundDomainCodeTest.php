<?php
namespace DrdPlus\Tests\Codes\Body;

use DrdPlus\Codes\Body\AfflictionByWoundDomainCode;
use DrdPlus\Tests\Codes\CodeTest;

class AfflictionByWoundDomainCodeTest extends CodeTest
{
    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
    {
        self::assertSame(
            $expectedCodes = ['physical', 'psychical'],
            AfflictionByWoundDomainCode::getAfflictionByWoundDomainCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }
}