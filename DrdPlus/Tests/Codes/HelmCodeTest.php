<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\HelmCode;

class HelmCodeTest extends ArmorCodeTest
{
    /**
     * @test
     */
    public function I_can_ask_it_if_is_helm_or_body_armor()
    {
        $helmCode = HelmCode::getIt(HelmCode::BARREL_HELM);
        self::assertTrue($helmCode->isHelm());
        self::assertFalse($helmCode->isBodyArmor());
    }

    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
    {
        self::assertSame(
            $expectedCodes = [
                'without_helm',
                'leather_cap',
                'chainmail_hood',
                'conical_helm',
                'full_helm',
                'barrel_helm',
                'great_helm',
            ],
            HelmCode::getHelmCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }
}