<?php
namespace DrdPlus\Tests\Codes\EnumTypes;

use DrdPlus\Codes\Armaments\ArrowCode;

class CodeTypeTest extends AbstractCodeTypeWithoutSubTypesTest
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
            // something like ArrowCode::incendiary_arrow
            self::assertSame(\explode('::', $valueFromDb)[1], $enum->getValue());
        }
    }

    public function provideValuesFromDb(): array
    {
        return \array_map(
            function (string $arrow) {
                return [ArrowCode::class . '::' . $arrow];
            },
            ArrowCode::getPossibleValues() // for example
        );
    }

    protected function getRegisteredClass(): string
    {
        return ArrowCode::class; // for example
    }

    /**
     * @test
     * @expectedException \Doctrineum\Scalar\Exceptions\EnumClassNotFound
     * @throws \Doctrine\DBAL\DBALException
     */
    public function I_get_enum_with_empty_string_on_conversion(): void
    {
        // There is no default enum class for CodeType, every code needs a value
        parent::I_get_enum_with_empty_string_on_conversion();
    }
}