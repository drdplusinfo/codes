<?php
declare(strict_types=1); // on PHP 7+ are standard PHP methods strict to types of given parameters

namespace DrdPlus\Codes\Units;

use DrdPlus\Codes\Partials\FileBasedTranslatableCode;

/**
 * @method static VolumeUnitCode getIt($codeValue)
 */
class VolumeUnitCode extends FileBasedTranslatableCode
{
    const LITER = 'liter';
    const CUBIC_METER = 'cubic_meter';
    const CUBIC_KILOMETER = 'cubic_kilometer';
    const CUBIC_LIGHT_YEAR = 'cubic_light_year';

    public static function getPossibleValues(): array
    {
        return [
            self::LITER,
            self::CUBIC_METER,
            self::CUBIC_KILOMETER,
            self::CUBIC_LIGHT_YEAR,
        ];
    }

    protected function getTranslationsFileName(): string
    {
        return __DIR__ . '/translations/volume_unit_code.csv';
    }
}