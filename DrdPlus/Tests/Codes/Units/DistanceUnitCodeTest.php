<?php
namespace DrdPlus\Tests\Codes\Units;

use DrdPlus\Codes\Partials\TranslatableCode;
use DrdPlus\Tests\Codes\Partials\TranslatableCodeTest;

class DistanceUnitCodeTest extends TranslatableCodeTest
{
    protected function getExpectedCzechTranslationOfFewDecimal(TranslatableCode $translatableCode): string
    {
        self::assertSame('meter', $translatableCode->getValue());

        return 'metru';
    }
}