<?php
namespace DrdPlus\Codes\Units;

use DrdPlus\Codes\Partials\TranslatableCode;

/**
 * @method static WeightUnitCode getIt($codeValue)
 */
class WeightUnitCode extends TranslatableCode
{
    const KG = 'kg';

    protected function fetchTranslations(): array
    {
        return [
            'cs' => [self::KG => ['one' => 'kilogram', 'few' => 'kilogramy', 'many' => 'kilogramů']],
            'en' => [self::KG => ['one' => 'kg', 'few' => 'kgs', 'many' => 'kgs']],
        ];
    }

    protected static function getDefaultValues(): array
    {
        return [self::KG];
    }

}