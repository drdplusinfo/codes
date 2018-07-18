<?php
declare(strict_types=1);
/** be strict for parameter types, https://www.quora.com/Are-strict_types-in-PHP-7-not-a-bad-idea */

namespace DrdPlus\Tests\Codes\EnumTypes;

abstract class AbstractCodeTypeWithoutSubTypesTest extends AbstractCodeTypeTest
{
    /**
     * @test
     */
    public function I_get_default_enum_class_if_subtype_regexp_does_not_match(): void
    {
        self::assertFalse(false, $this->getRegisteredClass() . ' can not has sub-types');
    }

    /**
     * @test
     * @param $valueFromDb = null
     */
    public function Scalar_value_is_converted_to_enum_subtype_with_that_value($valueFromDb = null): void
    {
        self::assertFalse(false, $this->getRegisteredClass() . ' can not has sub-types');
    }
}