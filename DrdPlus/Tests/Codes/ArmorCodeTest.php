<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\ArmorCode;

abstract class ArmorCodeTest extends ArmamentCodeTest
{
    /**
     * @test
     */
    abstract public function I_can_ask_it_if_is_helm_or_body_armor();

    /**
     * @test
     */
    public function It_is_armor_code()
    {
        $sutClass = $this->getSutClass();
        $reflection = new \ReflectionClass($sutClass);
        /** @var ArmorCode $sut */
        $sut = $sutClass::getIt(current($reflection->getConstants()));
        self::assertInstanceOf(ArmorCode::class, $sut);
        self::assertTrue($sut->isArmor());
        self::assertFalse($sut->isWeaponlike());
    }
}
