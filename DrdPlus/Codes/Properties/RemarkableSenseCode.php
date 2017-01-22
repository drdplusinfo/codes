<?php
namespace DrdPlus\Codes\Properties;

use DrdPlus\Codes\Partials\AbstractCode;

class RemarkableSenseCode extends AbstractCode
{
    const HEARING = 'hearing';
    const SIGHT = 'sight';
    const SMELL = 'smell';
    const TASTE = 'taste';
    const TOUCH = 'touch';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues()
    {
        return [
            self::HEARING,
            self::SIGHT,
            self::SMELL,
            self::TASTE,
            self::TOUCH,
        ];
    }

}