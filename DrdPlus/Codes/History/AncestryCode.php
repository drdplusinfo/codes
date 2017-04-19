<?php
namespace DrdPlus\Codes\History;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static AncestryCode getIt($codeValue)
 */
class AncestryCode extends AbstractCode
{
    const FOUNDLING = 'foundling';
    const ORPHAN = 'orphan';
    const FROM_INCOMPLETE_FAMILY = 'from_incomplete_family';
    const FROM_DOUBTFULLY_FAMILY = 'from_doubtfully_family';
    const FROM_MODEST_FAMILY = 'from_modest_family';
    const FROM_WEALTHY_FAMILY = 'from_wealthy_family';
    const FROM_WEALTHY_AND_INFLUENTIAL_FAMILY = 'from_wealthy_and_influential_family';
    const NOBLE = 'noble';
    const NOBLE_FROM_POWERFUL_FAMILY = 'noble_from_powerful_family';

    /**
     * @return array|string
     */
    public static function getPossibleValues(): array
    {
        return [
            self::FOUNDLING,
            self::ORPHAN,
            self::FROM_INCOMPLETE_FAMILY,
            self::FROM_DOUBTFULLY_FAMILY,
            self::FROM_MODEST_FAMILY,
            self::FROM_WEALTHY_FAMILY,
            self::FROM_WEALTHY_AND_INFLUENTIAL_FAMILY,
            self::NOBLE,
            self::NOBLE_FROM_POWERFUL_FAMILY,
        ];
    }

}