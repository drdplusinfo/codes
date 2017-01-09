<?php
namespace DrdPlus\Tests\Codes\EnumTypes;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;
use Doctrineum\Scalar\ScalarEnumType;
use Doctrineum\Tests\SelfRegisteringType\AbstractSelfRegisteringTypeTest;
use DrdPlus\Codes\Code;
use DrdPlus\Codes\EnumTypes\AbstractCodeType;
use DrdPlus\Codes\Partials\AbstractCode;

abstract class AbstractCodeTypeTest extends AbstractSelfRegisteringTypeTest
{
    protected function setUp()
    {
        // remove all types from registration
        $_typesMap = new \ReflectionProperty(Type::class, '_typesMap');
        $_typesMap->setAccessible(true);
        $_typesMap->setValue([]);

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
        $typeName = $this->getExpectedTypeName();
        self::assertFalse(Type::hasType($typeName), "Type of name '{$typeName}' should not be registered yet");
        /** @var AbstractCodeType $typeClass */
        $typeClass = $this->getTypeClass();
        foreach ($this->getRelatedCodeClasses() as $relatedCodeClass) {
            self::assertFalse(
                $typeClass::hasSubTypeEnum($relatedCodeClass),
                "Sub-type enum of a class '{$relatedCodeClass}' should not be registered yet"
            );
        }

        $typeClass::registerSelf();
        self::assertTrue(Type::hasType($typeName), "Type of name '{$typeName}' is not registered");

        $testedType = Type::getType($typeName);
        $platform = $this->createPlatform();
        foreach ($this->getRelatedCodeClasses() as $relatedCodeClass) {
            self::assertTrue(
                $typeClass::hasSubTypeEnum($relatedCodeClass),
                "Sub-type enum of a class '{$relatedCodeClass}' is not registered"
            );
            foreach ($relatedCodeClass::getPossibleValues() as $possibleValue) {
                $asPhp = $testedType->convertToPHPValue($relatedCodeClass . '::' . $possibleValue, $platform);
                self::assertInstanceOf($relatedCodeClass, $asPhp);
                /** @var AbstractCode $asPhp */
                self::assertSame($possibleValue, $asPhp->getValue());
            }
        }
        $typeClass::registerSelf(); // test if can call registering repeatedly
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
        $relatedRootCodeClass = $this->getRelatedRootCodeClass();
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

    private function getRelatedRootCodeClass()
    {
        $relatedRootCodeClass = preg_replace('~\\\EnumTypes(\\\.+)Type$~', '$1', $this->getTypeClass());
        self::assertTrue(
            class_exists($relatedRootCodeClass) || interface_exists($relatedRootCodeClass),
            "Invalid $relatedRootCodeClass root code class estimated from " . $this->getTypeClass()
        );

        return $relatedRootCodeClass;
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
            if ($folder->isDir()) {
                $namespace = rtrim($rootNamespace, '\\') . '\\' . $folder->getBasename();
                foreach ($this->getConcreteClassesFromDir($folder->getPathname(), $namespace) as $concreteClass) {
                    $concreteClasses[] = $concreteClass;
                }
            } else {
                $className = $rootNamespace . '\\' . $folder->getBasename('.php');
                if (class_exists($className) && !(new \ReflectionClass($className))->isAbstract()) {
                    $concreteClasses[] = $className;
                }
            }
        }

        return $concreteClasses;
    }

    /**
     * @test
     * @expectedException \DrdPlus\Codes\EnumTypes\Exceptions\UnknownCodeClass
     * @expectedExceptionMessageRegExp ~non-existing-class~
     */
    public function I_can_not_register_non_existing_class()
    {
        $reflectionClass = new \ReflectionClass(self::getSutClass());
        $registerCodeAsSubType = $reflectionClass->getMethod('registerCodeAsSubType');
        $registerCodeAsSubType->setAccessible(true);
        $registerCodeAsSubType->invoke($reflectionClass->newInstanceWithoutConstructor(), 'non-existing-class');
    }

    /**
     * @test
     * @expectedException \DrdPlus\Codes\EnumTypes\Exceptions\ExpectedEnumClass
     * @expectedExceptionMessageRegExp ~stdClass~
     */
    public function I_can_not_register_non_enum_class()
    {
        $reflectionClass = new \ReflectionClass(self::getSutClass());
        $registerCodeAsSubType = $reflectionClass->getMethod('registerCodeAsSubType');
        $registerCodeAsSubType->setAccessible(true);
        $registerCodeAsSubType->invoke($reflectionClass->newInstanceWithoutConstructor(), \stdClass::class);
    }
}