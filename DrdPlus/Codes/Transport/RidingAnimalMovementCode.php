<?php
namespace DrdPlus\Codes\Transport;

use DrdPlus\Codes\Partials\FileBasedTranslatableCode;

/**
 * @method static RidingAnimalMovementCode getIt($codeValue)
 */
class RidingAnimalMovementCode extends FileBasedTranslatableCode
{
    const STILL = 'still';
    const GAIT = 'gait';
    const TROT = 'trot';
    const CANTER = 'canter';
    const GALLOP = 'gallop';
    const JUMPING = 'jumping';

    /**
     * @return array|string[]
     */
    public static function getDefaultValues(): array
    {
        return [
            self::STILL,
            self::GAIT,
            self::TROT,
            self::CANTER,
            self::GALLOP,
            self::JUMPING,
        ];
    }

    /**
     * @return array|string[]
     */
    public static function getPossibleValuesWithoutJumping(): array
    {
        return array_values(array_diff(static::getPossibleValues(), [self::JUMPING]));
    }

    protected function getTranslationsFileName(): string
    {
        return __DIR__ . '/data/riding_animal_movement_code.csv';
    }
}