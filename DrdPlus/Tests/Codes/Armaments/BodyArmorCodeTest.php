<?php
namespace DrdPlus\Tests\Codes\Armaments;

use DrdPlus\Codes\Armaments\BodyArmorCode;

class BodyArmorCodeTest extends ArmorCodeTest
{
    /**
     * @test
     */
    public function I_can_ask_it_if_is_helm_or_body_armor()
    {
        $bodyArmorCode = BodyArmorCode::getIt(BodyArmorCode::FULL_PLATE_ARMOR);
        self::assertFalse($bodyArmorCode->isHelm());
        self::assertTrue($bodyArmorCode->isBodyArmor());
    }

    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
    {
        self::assertSame(
            $expectedCodes = [
                'without_armor',
                'padded_armor',
                'leather_armor',
                'hobnailed_armor',
                'chainmail_armor',
                'scale_armor',
                'plate_armor',
                'full_plate_armor',
            ],
            BodyArmorCode::getBodyArmorCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }

}