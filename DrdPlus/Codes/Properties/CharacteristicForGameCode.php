<?php
namespace DrdPlus\Codes\Properties;

use DrdPlus\Codes\CombatCharacteristicCode;
use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static CharacteristicForGameCode getIt($codeValue)
 */
class CharacteristicForGameCode extends AbstractCode
{
    const ATTACK = CombatCharacteristicCode::ATTACK;
    const DEFENSE = CombatCharacteristicCode::DEFENSE;
    const SHOOTING = CombatCharacteristicCode::SHOOTING;

    const ATTACK_NUMBER = 'attack_number';
    const DEFENSE_NUMBER = 'defense_number';
    const ENCOUNTER_RANGE = 'encounter_range';
    const FIGHT = 'fight';
    const FIGHT_NUMBER = 'fight_number';
    const LOADING_IN_ROUNDS = 'loading_in_rounds';
    const MAXIMAL_RANGE = 'maximal_range';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues(): array
    {
        return [
            self::ATTACK,
            self::DEFENSE,
            self::SHOOTING,
            self::ATTACK_NUMBER,
            self::DEFENSE_NUMBER,
            self::ENCOUNTER_RANGE,
            self::FIGHT,
            self::FIGHT_NUMBER,
            self::LOADING_IN_ROUNDS,
            self::MAXIMAL_RANGE,
        ];
    }

}