<?php
namespace DrdPlus\Codes\Tests\Armaments\EnumTypes;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;
use Doctrineum\Scalar\ScalarEnumType;
use Doctrineum\Tests\SelfRegisteringType\AbstractSelfRegisteringTypeTest;
use DrdPlus\Codes\Armaments\EnumTypes\WeaponlikeCodeType;
use DrdPlus\Codes\Armaments\MeleeWeaponCode;
use DrdPlus\Codes\Armaments\RangedWeaponCode;
use DrdPlus\Codes\Armaments\ShieldCode;

class WeaponlikeCodeTypeTest extends AbstractSelfRegisteringTypeTest
{
    protected function setUp()
    {
        // remove WeaponlikeCodeType from registration
        $_typesMap = new \ReflectionProperty(Type::class, '_typesMap');
        $_typesMap->setAccessible(true);
        $map = $_typesMap->getValue();
        if (array_key_exists(WeaponlikeCodeType::WEAPONLIKE_CODE, $map)) {
            unset($map[WeaponlikeCodeType::WEAPONLIKE_CODE]);
        }
        $_typesMap->setValue($map);

        // remove any subtypes from registration
        $subTypeEnums = new \ReflectionProperty(ScalarEnumType::class, 'subTypeEnums');
        $subTypeEnums->setAccessible(true);
        $subTypeEnums->setValue([]);
    }

    /**
     * @test
     */
    public function I_can_register_all_weapons_and_shields_at_once()
    {
        WeaponlikeCodeType::registerSelf();
        self::assertTrue(Type::hasType(WeaponlikeCodeType::WEAPONLIKE_CODE));

        $weaponlikeCodeType = Type::getType(WeaponlikeCodeType::WEAPONLIKE_CODE);
        $platform = $this->createPlatform();

        self::assertTrue(WeaponlikeCodeType::hasSubTypeEnum(MeleeWeaponCode::class));
        foreach (MeleeWeaponCode::getPossibleValues() as $meleeWeaponCode) {
            $asPhp = $weaponlikeCodeType->convertToPHPValue(
                MeleeWeaponCode::class . '::' . $meleeWeaponCode,
                $platform
            );
            self::assertInstanceOf(MeleeWeaponCode::class, $asPhp);
            /** @var MeleeWeaponCode $asPhp */
            self::assertSame($meleeWeaponCode, $asPhp->getValue());
        }

        self::assertTrue(WeaponlikeCodeType::hasSubTypeEnum(RangedWeaponCode::class));
        foreach (RangedWeaponCode::getPossibleValues() as $rangedWeaponCode) {
            $asPhp = $weaponlikeCodeType->convertToPHPValue(
                RangedWeaponCode::class . '::' . $rangedWeaponCode,
                $platform
            );
            self::assertInstanceOf(RangedWeaponCode::class, $asPhp);
            /** @var RangedWeaponCode $asPhp */
            self::assertSame($rangedWeaponCode, $asPhp->getValue());
        }

        self::assertTrue(WeaponlikeCodeType::hasSubTypeEnum(ShieldCode::class));
        foreach (ShieldCode::getPossibleValues() as $shieldCode) {
            $asPhp = $weaponlikeCodeType->convertToPHPValue(
                ShieldCode::class . '::' . $shieldCode,
                $platform
            );
            self::assertInstanceOf(ShieldCode::class, $asPhp);
            /** @var ShieldCode $asPhp */
            self::assertSame($shieldCode, $asPhp->getValue());
        }
    }

    /**
     * @return \Mockery\MockInterface|AbstractPlatform
     */
    private function createPlatform()
    {
        return $this->mockery(AbstractPlatform::class);
    }
}