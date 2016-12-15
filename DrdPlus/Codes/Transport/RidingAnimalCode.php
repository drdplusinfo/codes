<?php
namespace DrdPlus\Codes\Transport;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static RidingAnimalCode getIt($codeValue)
 */
class RidingAnimalCode extends AbstractCode
{
    const HORSE = 'horse';
    const DRAFT_HORSE = 'draft_horse';
    const RIDING_HORSE = 'riding_horse';
    const WAR_HORSE = 'war_horse';
    const CAMEL = 'camel';
    const ELEPHANT = 'elephant';
    const YAK = 'yak';
    const LAME = 'lame';
    const DONKEY = 'donkey';
    const PONY = 'pony';
    const HINNY = 'hinny';
    const COW = 'cow';
    const BULL = 'bull';
    const UNICORN = 'unicorn';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues()
    {
        return [
            self::HORSE,
            self::DRAFT_HORSE,
            self::RIDING_HORSE,
            self::WAR_HORSE,
            self::CAMEL,
            self::ELEPHANT,
            self::YAK,
            self::LAME,
            self::DONKEY,
            self::PONY,
            self::HINNY,
            self::COW,
            self::BULL,
            self::UNICORN,
        ];
    }
}