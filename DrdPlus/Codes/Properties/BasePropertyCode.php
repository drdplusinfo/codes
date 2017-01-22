<?php
namespace DrdPlus\Codes\Properties;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static BasePropertyCode getIt($codeValue)
 */
class BasePropertyCode extends AbstractCode
{
    const STRENGTH = 'strength';
    const AGILITY = 'agility';
    const KNACK = 'knack';
    const WILL = 'will';
    const INTELLIGENCE = 'intelligence';
    const CHARISMA = 'charisma';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues()
    {
        return [
            self::STRENGTH,
            self::AGILITY,
            self::KNACK,
            self::WILL,
            self::INTELLIGENCE,
            self::CHARISMA,
        ];
    }
}