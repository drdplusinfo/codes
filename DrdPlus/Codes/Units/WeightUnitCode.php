<?php
namespace DrdPlus\Codes\Units;

use DrdPlus\Codes\Partials\TranslatableCode;

/**
 * @method static WeightUnitCode getIt($codeValue)
 * @method static WeightUnitCode findIt($codeValue)
 */
class WeightUnitCode extends TranslatableCode
{
    public const KG = 'kg';

    protected function fetchTranslations(): array
    {
        return [
            'cs' => [self::KG => ['one' => 'kilogram', 'few' => 'kilogramy', 'many' => 'kilogramů']],
            'en' => [self::KG => ['one' => 'kg', 'few' => 'kgs', 'many' => 'kgs']],
        ];
    }

    public static function getPossibleValues(): array
    {
        return [self::KG];
    }

}