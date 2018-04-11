<?php
namespace DrdPlus\Tests\Codes\Body\EnumTypes;

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
     * @dataProvider provideCodeAndClass
     * @param string $originCode
     * @param string $expectedOriginClass
     * @throws \Doctrine\DBAL\DBALException
     */
    public function I_can_use_safely_all_origins(string $originCode, string $expectedOriginClass): void
    {
        WoundOriginCodeType::registerSelf();
        $woundOrigin = WoundOriginCodeType::getType(WoundOriginCodeType::WOUND_ORIGIN_CODE);
        self::assertInstanceOf($expectedOriginClass, $woundOrigin->convertToPHPValue($originCode, $this->createPlatform()));
    }

    public function provideCodeAndClass(): array
    {
        return [
            [OrdinaryWoundOriginCode::ORDINARY, OrdinaryWoundOriginCode::class],
            [SeriousWoundOriginCode::ELEMENTAL, SeriousWoundOriginCode::class],
            [SeriousWoundOriginCode::MECHANICAL_CRUSH, SeriousWoundOriginCode::class],
            [SeriousWoundOriginCode::MECHANICAL_CUT, SeriousWoundOriginCode::class],
            [SeriousWoundOriginCode::MECHANICAL_STAB, SeriousWoundOriginCode::class],
            [SeriousWoundOriginCode::PSYCHICAL, SeriousWoundOriginCode::class],
        ];
    }

    /**
     * @test
     */
    public function I_get_registered_subtype_enum_on_match(): void
    {

    }
}