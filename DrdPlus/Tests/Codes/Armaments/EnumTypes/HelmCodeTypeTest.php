<?php
namespace DrdPlus\Codes\Tests\Armaments\EnumTypes;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;
use Doctrineum\Scalar\ScalarEnumType;
use Doctrineum\Tests\SelfRegisteringType\AbstractSelfRegisteringTypeTest;
use DrdPlus\Codes\Armaments\EnumTypes\HelmCodeType;
use DrdPlus\Codes\Armaments\HelmCode;

class HelmCodeTypeTest extends AbstractSelfRegisteringTypeTest
{
    protected function setUp()
    {
        // remove HelmCodeType from registration
        $_typesMap = new \ReflectionProperty(Type::class, '_typesMap');
        $_typesMap->setAccessible(true);
        $map = $_typesMap->getValue();
        if (array_key_exists(HelmCodeType::HELM_CODE, $map)) {
            unset($map[HelmCodeType::HELM_CODE]);
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
    public function I_can_register_all_helms_at_once()
    {
        HelmCodeType::registerSelf();
        self::assertTrue(Type::hasType(HelmCodeType::HELM_CODE));

        $helmCodeType = Type::getType(HelmCodeType::HELM_CODE);
        $platform = $this->createPlatform();

        self::assertTrue(HelmCodeType::hasSubTypeEnum(HelmCode::class));
        foreach (HelmCode::getPossibleValues() as $helmCode) {
            $asPhp = $helmCodeType->convertToPHPValue(HelmCode::class . '::' . $helmCode, $platform);
            self::assertInstanceOf(HelmCode::class, $asPhp);
            /** @var HelmCode $asPhp */
            self::assertSame($helmCode, $asPhp->getValue());
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