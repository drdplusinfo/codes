<?php
namespace DrdPlus\Tests\Codes;

abstract class AbstractCodesTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param array|string[] $expectedCodes
     */
    protected function I_can_get_codes_by_same_named_constants(array $expectedCodes)
    {
        $reflection = new \ReflectionClass($this->getSutClass());
        $constants = $reflection->getConstants();
        foreach ($expectedCodes as $expectedCode) {
            $constantName = strtoupper($expectedCode);
            self::assertArrayHasKey($constantName, $constants);
            self::assertSame($constants[$constantName], $expectedCode);
        }
    }

    /**
     * @return string
     */
    protected function getSutClass()
    {
        return preg_replace('~[\\\]Tests([\\\].+)Test$~', '$1', static::class);
    }
}