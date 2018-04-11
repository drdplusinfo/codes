<?php
namespace DrdPlus\Codes\Transport;

use DrdPlus\Codes\Partials\TranslatableExtendableCode;

/**
 * @method static RidingAnimalCode getIt($codeValue)
 * @method static RidingAnimalCode findIt($codeValue)
 */
class RidingAnimalCode extends TranslatableExtendableCode
{
    public const HORSE = 'horse';
    public const DRAFT_HORSE = 'draft_horse';
    public const RIDING_HORSE = 'riding_horse';
    public const WAR_HORSE = 'war_horse';
    public const CAMEL = 'camel';
    public const ELEPHANT = 'elephant';
    public const YAK = 'yak';
    public const LAME = 'lame';
    public const DONKEY = 'donkey';
    public const PONY = 'pony';
    public const HINNY = 'hinny';
    public const MULE = 'mule';
    public const COW = 'cow';
    public const BULL = 'bull';
    public const UNICORN = 'unicorn';

    /**
     * @return array|string[]
     */
    protected static function getDefaultValues(): array
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
            self::MULE,
            self::COW,
            self::BULL,
            self::UNICORN,
        ];
    }

    /**
     * @param string $newRidingAnimalCodeValue
     * @param array $translations
     * @return bool
     * @throws \DrdPlus\Codes\Partials\Exceptions\InvalidLanguageCode
     * @throws \DrdPlus\Codes\Partials\Exceptions\UnknownTranslationPlural
     * @throws \DrdPlus\Codes\Partials\Exceptions\InvalidTranslationFormat
     */
    public static function addNewRidingAnimalCode(string $newRidingAnimalCodeValue, array $translations): bool
    {
        return static::addNewCode($newRidingAnimalCodeValue, $translations);
    }

    protected function fetchTranslations(): array
    {
        return [
            'en' => [
                self::HORSE => ['one' => 'horse', 'few' => 'horses', 'many' => 'horses'],
                self::DRAFT_HORSE => ['one' => 'draft horse', 'few' => 'draft horses', 'many' => 'draft horses'],
                self::RIDING_HORSE => ['one' => 'riding horse', 'few' => 'riding horses', 'many' => 'riding horses'],
                self::WAR_HORSE => ['one' => 'war horse', 'few' => 'war horses', 'many' => 'war horses'],
                self::CAMEL => ['one' => 'camel', 'few' => 'camels', 'many' => 'camels'],
                self::ELEPHANT => ['one' => 'elephant', 'few' => 'elephants', 'many' => 'elephants'],
                self::YAK => ['one' => 'yak', 'few' => 'yaks', 'many' => 'yaks'],
                self::LAME => ['one' => 'lame', 'few' => 'lames', 'many' => 'lames'],
                self::DONKEY => ['one' => 'donkey', 'few' => 'donkeys', 'many' => 'donkeys'],
                self::PONY => ['one' => 'pony', 'few' => 'ponies', 'many' => 'ponies'],
                self::HINNY => ['one' => 'hinny', 'few' => 'hinnies', 'many' => 'hinnies'],
                self::MULE => ['one' => 'mule', 'few' => 'mules', 'many' => 'mules'],
                self::COW => ['one' => 'cow', 'few' => 'cows', 'many' => 'cows'],
                self::BULL => ['one' => 'bull', 'few' => 'bulls', 'many' => 'bulls'],
                self::UNICORN => ['one' => 'unicorn', 'few' => 'unicorns', 'many' => 'unicorns'],
            ],
            'cs' => [
                self::HORSE => ['one' => 'kůň', 'few' => 'koně', 'many' => 'koní'],
                self::DRAFT_HORSE => ['one' => 'tažný kůň', 'few' => 'tažné koně', 'many' => 'tažných koní'],
                self::RIDING_HORSE => ['one' => 'jezdecký kůň', 'few' => 'jezdečtí koně', 'many' => 'jezdeckých koní'],
                self::WAR_HORSE => ['one' => 'válečný kůň', 'few' => 'válečné koně', 'many' => 'válečných koní'],
                self::CAMEL => ['one' => 'velbloud', 'few' => 'velbloudi', 'many' => 'velbloudů'],
                self::ELEPHANT => ['one' => 'slon', 'few' => 'sloni', 'many' => 'slonů'],
                self::YAK => ['one' => 'jak', 'few' => 'jaci', 'many' => 'jaků'],
                self::LAME => ['one' => 'lama', 'few' => 'lamy', 'many' => 'lam'],
                self::DONKEY => ['one' => 'osel', 'few' => 'oslové', 'many' => 'oslů'],
                self::PONY => ['one' => 'pony', 'few' => 'pony', 'many' => 'pony'],
                self::HINNY => ['one' => 'mezek', 'few' => 'mezci', 'many' => 'mezků'],
                self::MULE => ['one' => 'mula', 'few' => 'muly', 'many' => 'mul'],
                self::COW => ['one' => 'kráva', 'few' => 'krávy', 'many' => 'krav'],
                self::BULL => ['one' => 'býk', 'few' => 'býci', 'many' => 'býků'],
                self::UNICORN => ['one' => 'jednorožec', 'few' => 'jednorožci', 'many' => 'jednorožců'],
            ],
        ];
    }

}