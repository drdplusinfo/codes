<?php
namespace DrdPlus\Codes\Body;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static ConditionsAffectingHealingCode getIt($codeValue)
 * @method static ConditionsAffectingHealingCode findIt($codeValue)
 */
class ConditionsAffectingHealingCode extends AbstractCode
{
    public const FOUL_CONDITIONS = 'foul_conditions';
    public const BAD_CONDITIONS = 'bad_conditions';
    public const IMPAIRED_CONDITIONS = 'impaired_conditions';
    public const GOOD_CONDITIONS = 'good_conditions';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues(): array
    {
        return [
            self::FOUL_CONDITIONS,
            self::BAD_CONDITIONS,
            self::IMPAIRED_CONDITIONS,
            self::GOOD_CONDITIONS,
        ];
    }
}