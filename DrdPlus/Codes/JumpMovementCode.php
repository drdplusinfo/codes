<?php
namespace DrdPlus\Codes;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static JumpMovementCode getIt($codeValue)
 */
class JumpMovementCode extends AbstractCode
{
    const STANDING_JUMP = 'standing_jump';
    const FLYING_JUMP = 'flying_jump';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues(): array
    {
        return [
            self::STANDING_JUMP,
            self::FLYING_JUMP,
        ];
    }

}