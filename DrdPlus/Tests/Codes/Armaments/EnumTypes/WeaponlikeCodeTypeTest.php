<?php
namespace DrdPlus\Codes\Tests\Armaments\EnumTypes;

use DrdPlus\Codes\Armaments\MeleeWeaponCode;
use DrdPlus\Tests\Codes\EnumTypes\AbstractCodeTypeWithoutSubTypesTest;
use PHPUnit\Util\Type;

class WeaponlikeCodeTypeTest extends AbstractCodeTypeWithoutSubTypesTest
{
    /**
     * @test
     * @dataProvider provideValuesFromDb
     * @param mixed $valueFromDb = null
     * @throws \Doctrine\DBAL\DBALException
     */
    public function Scalar_value_is_converted_to_enum_with_that_value($valueFromDb = null): void
    {
        $platform = $this->getPlatform();
        $enum = $this->createSut()->convertToPHPValue($valueFromDb, $platform);
        if ($valueFromDb === null) {
            self::assertNull($enum);
        } else {
            self::assertInstanceOf($this->getRegisteredClass(), $enum);
            // something like MeleeWeaponCode::hand
            self::assertSame(\explode('::', $valueFromDb)[1], $enum->getValue());
        }
    }

    /**
     * @return Type|string
     */
    protected function getRegisteredClass(): string
    {
        return MeleeWeaponCode::class; // for example
    }

    public function provideValuesFromDb(): array
    {
        return \array_map(
            function (string $bodyArmor) {
                return [MeleeWeaponCode::class . '::' . $bodyArmor];
            },
            MeleeWeaponCode::getPossibleValues() // for example
        );
    }

    /**
     * @test
     * @expectedException \DrdPlus\Codes\Armaments\EnumTypes\Exceptions\ThereIsNoDefaultEnumForWeaponlikeCode
     * @expectedExceptionMessageRegExp ~MeleeWeaponCode~
     */
    public function I_get_enum_with_empty_string_on_conversion(): void
    {
        parent::I_get_enum_with_empty_string_on_conversion();
    }

}