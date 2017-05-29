<?php
namespace DrdPlus\Codes\Armaments;

/**
 * @method static ArrowCode getIt($codeValue)
 */
class ArrowCode extends ProjectileCode
{
    const BASIC_ARROW = 'basic_arrow';
    const LONG_RANGE_ARROW = 'long_range_arrow';
    const WAR_ARROW = 'war_arrow';
    const PIERCING_ARROW = 'piercing_arrow';
    const HOLLOW_ARROW = 'hollow_arrow';
    const CRIPPLING_ARROW = 'crippling_arrow';
    const INCENDIARY_ARROW = 'incendiary_arrow';
    const SILVER_ARROW = 'silver_arrow';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues(): array
    {
        return [
            self::BASIC_ARROW,
            self::LONG_RANGE_ARROW,
            self::WAR_ARROW,
            self::PIERCING_ARROW,
            self::HOLLOW_ARROW,
            self::CRIPPLING_ARROW,
            self::INCENDIARY_ARROW,
            self::SILVER_ARROW,
        ];
    }

    /**
     * @return bool
     */
    public function isArrow(): bool
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isDart(): bool
    {
        return false;
    }

    /**
     * @return bool
     */
    public function isSlingStone(): bool
    {
        return false;
    }

}