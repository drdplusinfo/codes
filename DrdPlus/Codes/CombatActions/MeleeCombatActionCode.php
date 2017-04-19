<?php
namespace DrdPlus\Codes\CombatActions;

/**
 * @method static MeleeCombatActionCode getIt($codeValue)
 */
class MeleeCombatActionCode extends CombatActionCode
{
    // See PPH page 107-109
    const HEADLESS_ATTACK = 'headless_attack';
    const COVER_OF_ALLY = 'cover_of_ally';
    const FLAT_ATTACK = 'flat_attack';
    const PRESSURE = 'pressure';
    const RETREAT = 'retreat';

    /**
     * @return array|string[]
     */
    public static function getMeleeOnlyCombatActionValues()
    {
        return [
            self::HEADLESS_ATTACK,
            self::COVER_OF_ALLY,
            self::FLAT_ATTACK,
            self::PRESSURE,
            self::RETREAT,
        ];
    }

    /**
     * @return array|string[]
     */
    public static function getPossibleValues(): array
    {
        return array_merge(
            parent::getPossibleValues(),
            self::getMeleeOnlyCombatActionValues()
        );
    }

    /**
     * @return bool
     */
    public function isForRanged()
    {
        // only actions inherited from generic combat actions can be used for ranged attack
        return !in_array($this->getValue(), self::getMeleeOnlyCombatActionValues(), true);
    }
}