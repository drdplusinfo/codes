<?php
namespace DrdPlus\Tests\Codes\Body\EnumTypes;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;
use DrdPlus\Codes\Body\EnumTypes\WoundOriginCodeType;
use DrdPlus\Codes\Body\OrdinaryWoundOriginCode;
use DrdPlus\Codes\Body\SeriousWoundOriginCode;
use DrdPlus\Tests\Codes\EnumTypes\AbstractCodeTypeWithoutSubTypesTest;

class WoundOriginCodeTypeTest extends AbstractCodeTypeWithoutSubTypesTest
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
            // something like SeriousWoundOriginCode::psychical
            self::assertSame(\explode('::', $valueFromDb)[1], $enum->getValue());
        }
    }

    public function provideValuesFromDb(): array
    {
        return \array_map(
            function (string $woundOrigin) {
                return [SeriousWoundOriginCode::class . '::' . $woundOrigin];
            },
            SeriousWoundOriginCode::getPossibleValues() // for example
        );
    }

    /**
     * @return Type|string
     */
    protected function getRegisteredClass(): string
    {
        return SeriousWoundOriginCode::class; // for example
    }

    /**
     * @test
     * @throws \Doctrine\DBAL\DBALException
     */
    public function I_get_wound_origin_registered_as_subtype_enum(): void
    {
        WoundOriginCodeType::registerSelf();
        $woundOrigin = WoundOriginCodeType::getType(WoundOriginCodeType::WOUND_ORIGIN_CODE);
        /** @var AbstractPlatform $abstractPlatform */
        $abstractPlatform = $this->getPlatform();
        foreach (SeriousWoundOriginCode::getPossibleValues() as $ordinaryWoundsOriginValue) {
            $enumFromSubType = $woundOrigin->convertToPHPValue(
            // values of sub-types are persisted with class name as well
                SeriousWoundOriginCode::class . '::' . $ordinaryWoundsOriginValue,
                $abstractPlatform
            );
            self::assertInstanceOf(SeriousWoundOriginCode::class, $enumFromSubType);
            self::assertSame($ordinaryWoundsOriginValue, (string)$enumFromSubType);
        }
        foreach (OrdinaryWoundOriginCode::getPossibleValues() as $ordinaryWoundsOriginValue) {
            $enumFromSubType = $woundOrigin->convertToPHPValue(
            // values of sub-types are persisted with class name as well
                OrdinaryWoundOriginCode::class . '::' . $ordinaryWoundsOriginValue,
                $abstractPlatform
            );
            self::assertInstanceOf(OrdinaryWoundOriginCode::class, $enumFromSubType);
            self::assertSame($ordinaryWoundsOriginValue, (string)$enumFromSubType);
        }
    }

    /**
     * @test
     * @expectedException \DrdPlus\Codes\Body\EnumTypes\Exceptions\ThereIsNoDefaultEnumForWoundOriginCode
     * @expectedExceptionMessageRegExp ~SeriousWoundOrigin~
     */
    public function I_get_enum_with_empty_string_on_conversion(): void
    {
        parent::I_get_enum_with_empty_string_on_conversion();
    }

    protected function getSomeEnumValue(): string
    {
        return SeriousWoundOriginCode::PSYCHICAL;
    }
}