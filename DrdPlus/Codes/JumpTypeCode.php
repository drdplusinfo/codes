<?php
namespace DrdPlus\Codes;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static JumpTypeCode getIt($codeValue)
 */
class JumpTypeCode extends AbstractCode
{
    const HIGH_JUMP = 'high_jump';
    const BROAD_JUMP = 'broad_jump';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues(): array
    {
        return [
            self::HIGH_JUMP,
            self::BROAD_JUMP,
        ];
    }

}