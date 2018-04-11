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

    /**
     * @test
     * @expectedException \Doctrineum\Scalar\Exceptions\EnumClassNotFound
     */
    public function I_get_enum_with_empty_string_on_conversion(): void
    {
        // There is no default enum class for CodeType, every code needs a value
        parent::I_get_enum_with_empty_string_on_conversion();
    }

    /**
     * @test
     * @expectedException \Doctrineum\Scalar\Exceptions\EnumClassNotFound
     */
    public function I_get_default_enum_class_if_subtype_regexp_does_not_match(): void
    {
        // There is no default enum class for CodeType, every code needs a value
        parent::I_get_default_enum_class_if_subtype_regexp_does_not_match();
    }
}