<?php
namespace DrdPlus\Codes\History;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static BackgroundCode getIt($codeValue)
 */
class BackgroundCode extends AbstractCode
{
    const ANCESTRY = 'ancestry';
    const POSSESSION = 'possession';
    const SKILLS = 'skills';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues()
    {
        return [self::ANCESTRY, self::POSSESSION, self::SKILLS];
    }

}