<?php
namespace DrdPlus\Codes\Tests\EnumTypes;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;
use Doctrineum\Scalar\ScalarEnumType;
use Doctrineum\Tests\SelfRegisteringType\AbstractSelfRegisteringTypeTest;
use DrdPlus\Codes\Code;
use DrdPlus\Codes\Partials\AbstractCode;

abstract class AbstractCodeTypeTest extends AbstractSelfRegisteringTypeTest
{
    protected function setUp()
    {
        // remove tested type from registration
        $_typesMap = new \ReflectionProperty(Type::class, '_typesMap');
        $_typesMap->setAccessible(true);
        $map = $_typesMap->getValue();
        $typeName = $this->getExpectedTypeName();
        if (array_key_exists($typeName, $map)) {
            unset($map[$typeName]);
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
    public function I_can_register_all_codes_at_once()
    {
        /** @var ScalarEnumType $typeClass */
        $typeClass = $this->getTypeClass();
        $typeClass::registerSelf();
        $typeName = $this->getExpectedTypeName();
        self::assertTrue(Type::hasType($typeName));

        $testedType = Type::getType($typeName);
        $platform = $this->createPlatform();

        foreach ($this->getRelatedCodeClasses() as $relatedCodeClass) {
            self::assertTrue($typeClass::hasSubTypeEnum($relatedCodeClass));
            foreach ($relatedCodeClass::getPossibleValues() as $possibleValue) {
                $asPhp = $testedType->convertToPHPValue($relatedCodeClass . '::' . $possibleValue, $platform);
                self::assertInstanceOf($relatedCodeClass, $asPhp);
                /** @var AbstractCode $asPhp */
                self::assertSame($possibleValue, $asPhp->getValue());
            }
        }
    }

    /**
     * @return \Mockery\MockInterface|AbstractPlatform
     */
    private function createPlatform()
    {
        return $this->mockery(AbstractPlatform::class);
    }

    /**
     * @return array|AbstractCode[]
     */
    private function getRelatedCodeClasses()
    {
        $relatedRootCodeClass = $this->getRegisteredClass();
        $codeReflection = new \ReflectionClass(Code::class);
        $rootDir = dirname($codeReflection->getFileName());

        $concreteClassesFromDir = $this->getConcreteClassesFromDir($rootDir, $codeReflection->getNamespaceName());
        $relatedCodeClasses = [];
        foreach ($concreteClassesFromDir as $class) {
            if (is_a($class, $relatedRootCodeClass, true /* instance is not needed */)) {
                $relatedCodeClasses[] = $class;
            }
        }

        return $relatedCodeClasses;
    }

    /**
     * @param string $rootDir
     * @param string $rootNamespace
     * @return array|string[]
     */
    private function getConcreteClassesFromDir($rootDir, $rootNamespace)
    {
        $concreteClasses = [];
        $directoryIterator = new \DirectoryIterator($rootDir);
        foreach ($directoryIterator as $folder) {
            if ($folder->isDot()) {
                continue;
            }
            $namespace = rtrim($rootNamespace, '\\') . '\\' . $folder->getBasename();
            if ($folder->isDir()) {
                foreach ($this->getConcreteClassesFromDir($folder->getPath(), $namespace) as $concreteClass) {
                    $concreteClasses[] = $concreteClass;
                }
            } else {
                $className = $namespace . '\\' . $folder->getBasename('.php');
                if (class_exists($className) && (new \ReflectionClass($className))->isInstantiable()) {
                    $concreteClasses[] = $className;
                }
            }
        }

        return $concreteClasses;
    }
}