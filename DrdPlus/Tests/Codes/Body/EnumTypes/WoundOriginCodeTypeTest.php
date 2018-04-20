<?php
namespace DrdPlus\Tests\Codes\Body\EnumTypes;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;
use DrdPlus\Codes\Body\EnumTypes\WoundOriginCodeType;
use DrdPlus\Codes\Body\OrdinaryWoundOriginCode;
use DrdPlus\Codes\Body\SeriousWoundOriginCode;
use DrdPlus\Tests\Codes\EnumTypes\AbstractCodeTypeTest;

class WoundOriginCodeTypeTest extends AbstractCodeTypeTest
{
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

    /**
     * @test
     * @expectedException \DrdPlus\Codes\Body\EnumTypes\Exceptions\ThereIsNoDefaultEnumForWoundOriginCode
     * @expectedExceptionMessageRegExp ~SeriousWoundOrigin~
     */
    public function I_get_default_enum_class_if_subtype_regexp_does_not_match(): void
    {
        parent::I_get_default_enum_class_if_subtype_regexp_does_not_match();
    }

    protected function getSomeEnumValue(): string
    {
        return SeriousWoundOriginCode::PSYCHICAL;
    }
}