<?php
namespace DrdPlus\Tests\Codes\EnumTypes;

use Doctrine\DBAL\Types\Type;
use DrdPlus\Codes\History\AncestryCode;

class CodeTypeTest extends AbstractCodeTypeTest
{
    /**
     * @return Type|string
     */
    protected function getRegisteredClass(): string
    {
        return AncestryCode::class; // for example
    }

    protected function getSomeValueForEnum(): string
    {
        $codeClass = AncestryCode::class; // for example
        $reflectionClass = new \ReflectionClass($codeClass);
        $constants = $reflectionClass->getConstants();

        return $codeClass . '::' . $constants[array_rand($constants, 1)]; // value prefixed with source class full name
    }

    /**
     * @test
     * @expectedException \Doctrineum\Scalar\Exceptions\EnumClassNotFound
     */
    public function I_get_enum_with_empty_string_on_conversion()
    {
        // There is no default enum class for CodeType, every code needs a value
        parent::I_get_enum_with_empty_string_on_conversion();
    }

    /**
     * @test
     * @expectedException \Doctrineum\Scalar\Exceptions\EnumClassNotFound
     */
    public function I_get_default_enum_class_if_subtype_regexp_does_not_match()
    {
        // There is no default enum class for CodeType, every code needs a value
        parent::I_get_default_enum_class_if_subtype_regexp_does_not_match();
    }
}