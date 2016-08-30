<?php
namespace DrdPlus\Tests\Codes\Armaments;

use DrdPlus\Codes\Armaments\WeaponCode;

abstract class WeaponCodeTest extends WeaponlikeCodeTest
{
    /**
     * @test
     */
    public function It_is_weapon_code()
    {
        $sutClass = $this->getSutClass();
        $reflection = new \ReflectionClass($sutClass);
        /** @var WeaponCode $sut */
        $sut = $reflection->newInstanceWithoutConstructor();
        self::assertInstanceOf(WeaponCode::class, $sut);
        self::assertFalse($sut->isShield());
    }
}