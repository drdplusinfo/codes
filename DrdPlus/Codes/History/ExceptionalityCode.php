<?php
namespace DrdPlus\Codes\History;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static ExceptionalityCode getIt($codeValue)
 */
class ExceptionalityCode extends AbstractCode
{
    const ANCESTRY = 'ancestry';
    const POSSESSION = 'possession';
    const SKILLS = 'skills';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues(): array
    {
        return [self::ANCESTRY, self::POSSESSION, self::SKILLS];
    }

}