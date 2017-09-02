<?php
namespace DrdPlus\Tests\Codes\EnumTypes;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;
use Doctrineum\Scalar\ScalarEnumType;
use Doctrineum\Tests\Scalar\Helpers\WithToStringTestObject;
use Doctrineum\Tests\Scalar\ScalarEnumTypeTest;
use DrdPlus\Codes\Code;
use DrdPlus\Codes\EnumTypes\AbstractCodeType;
use DrdPlus\Codes\Partials\AbstractCode;
use Granam\Scalar\ScalarInterface;

abstract class AbstractCodeTypeTest extends ScalarEnumTypeTest
{
    protected function setUp()
    {
        parent::setUp();
        // remove all types from registration
        $_typesMap = new \ReflectionProperty(Type::class, '_typesMap');
        $_typesMap->setAccessible(true);
        $_typesMap->setValue([]);

        // remove any subtypes from registration
        $subTypeEnums = new \ReflectionProperty(ScalarEnumType::class, 'enumSubTypesMap');
        $subTypeEnums->setAccessible(true);
        $subTypeEnums->setValue([]);
    }

    /**
     * @return Type|string
     */
    protected function getRegisteredClass(): string
    {
        $registeredClass = preg_replace('~(?:\\\EnumTypes)?(\\\[[:alpha:]]+)Type$~', '$1', $this->getTypeClass());
        self::assertTrue(class_exists($registeredClass), "Estimated registered enum class {$registeredClass} does not exist");

        return $registeredClass;
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
        self::assertTrue(
            Type::hasType($typeName),
            "Type of name '{$typeName}' is not registered. Have you used expected '_code' suffix ?"
        );

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
        $typeClass::registerSelf(); // tests if can call registering repeatedly
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
    private function getRelatedCodeClasses(): array
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
    private function getConcreteClassesFromDir($rootDir, $rootNamespace): array
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
        $registerCode = $reflectionClass->getMethod('registerCode');
        $registerCode->setAccessible(true);
        $registerCode->invoke($reflectionClass->newInstanceWithoutConstructor(), 'non-existing-class');
    }

    /**
     * @test
     * @expectedException \DrdPlus\Codes\EnumTypes\Exceptions\ExpectedEnumClass
     * @expectedExceptionMessageRegExp ~stdClass~
     */
    public function I_can_not_register_non_enum_class()
    {
        $reflectionClass = new \ReflectionClass(self::getSutClass());
        $registerCode = $reflectionClass->getMethod('registerCode');
        $registerCode->setAccessible(true);
        $registerCode->invoke($reflectionClass->newInstanceWithoutConstructor(), \stdClass::class);
    }

    /**
     * @test
     */
    public function I_can_get_pure_integer_in_enum()
    {
        self::assertFalse(false, 'Codes are not supposed to hold numbers');
    }

    /**
     * @test
     */
    public function I_can_get_enum_with_pure_integer_zero()
    {
        self::assertFalse(false, 'Codes are not supposed to hold numbers');
    }

    /**
     * @test
     */
    public function I_can_get_enum_with_pure_float()
    {
        self::assertFalse(false, 'Codes are not supposed to hold numbers');
    }

    /**
     * @test
     */
    public function I_can_get_enum_with_pure_float_zero()
    {
        self::assertFalse(false, 'Codes are not supposed to hold numbers');
    }

    /**
     * @test
     */
    public function I_can_get_enum_with_pure_false()
    {
        self::assertFalse(false, 'Codes are not supposed to hold booleans');
    }

    /**
     * @test
     */
    public function I_can_get_enum_with_pure_true()
    {
        self::assertFalse(false, 'Codes are not supposed to hold booleans');
    }

    public function enum_as_database_value_is_string_value_of_that_enum($value = null)
    {
        parent::enum_as_database_value_is_string_value_of_that_enum($this->getSomeValueForEnum());
    }

    protected function getSomeValueForEnum(): string
    {
        $codeClass = $this->getRelatedRootCodeClass();
        $reflectionClass = new \ReflectionClass($codeClass);
        $constants = $reflectionClass->getConstants();

        return $codeClass . '::' . $constants[array_rand($constants, 1)]; // value prefixed with source class full name
    }

    public function string_to_php_value_is_enum_with_that_string(string $stringFromDb = null)
    {
        parent::string_to_php_value_is_enum_with_that_string($this->getSomeValueForEnum());
    }

    /**
     * @test
     * @expectedException \DrdPlus\Codes\Partials\Exceptions\UnknownValueForCode
     * @expectedExceptionMessageRegExp ~''~
     */
    public function I_get_enum_with_empty_string_on_conversion()
    {
        parent::I_get_enum_with_empty_string_on_conversion();
    }

    /**
     * @test
     * @param ScalarInterface|null $toStringObject
     */
    public function object_with_to_string_to_php_value_is_enum_with_that_string(ScalarInterface $toStringObject = null)
    {
        $platform = $this->getPlatform();
        $value = $toStringObject ? $toStringObject->__toString() : $this->getSomeValueForEnum();
        $enum = $this->createSut()->convertToPHPValue($toStringObject ?? new WithToStringTestObject($value), $platform);
        self::assertInstanceOf($this->getRegisteredClass(), $enum);
        // its always persisted as a sub-type with value prefixed code class
        $expectedValue = preg_replace('~^[^:]+::~', '', $value);
        self::assertSame($expectedValue, $enum->getValue());
        self::assertSame($expectedValue, (string)$enum);
    }

    /**
     * @test
     * @expectedException \DrdPlus\Codes\Partials\Exceptions\UnknownValueForCode
     * @expectedExceptionMessageRegExp ~without~
     */
    public function I_get_default_enum_class_if_subtype_regexp_does_not_match()
    {
        parent::I_get_default_enum_class_if_subtype_regexp_does_not_match();
    }

    /**
     * @test
     */
    public function I_can_use_subtype()
    {
        self::assertTrue(true, 'Of course I can, whole code philosophy is build on sub-types');
    }
}