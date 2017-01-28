<?php
namespace DrdPlus\Codes\Skills;

/**
 * @method static CombinedSkillCode getIt($codeValue)
 */
class CombinedSkillCode extends SkillCode
{

    // COMBINED
    const BIG_HANDWORK = 'big_handwork';
    const COOKING = 'cooking';
    const DANCING = 'dancing';
    const DUSK_SIGHT = 'dusk_sight';
    const FIGHT_WITH_BOWS = 'fight_with_bows';
    const FIGHT_WITH_CROSSBOWS = 'fight_with_crossbows';
    const FIRST_AID = 'first_aid';
    const GAMBLING = 'gambling';
    const HANDLING_WITH_ANIMALS = 'handling_with_animals';
    const HANDWORK = 'handwork';
    const HERBALISM = 'herbalism';
    const HUNTING_AND_FISHING = 'hunting_and_fishing';
    const KNOTTING = 'knotting';
    const PAINTING = 'painting';
    const PEDAGOGY = 'pedagogy';
    const PLAYING_ON_MUSIC_INSTRUMENT = 'playing_on_music_instrument';
    const SEDUCTION = 'seduction';
    const SHOWMANSHIP = 'showmanship';
    const SINGING = 'singing';
    const STATUARY = 'statuary';
    const TEACHING = 'teaching';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues()
    {
        return [
            self::BIG_HANDWORK,
            self::COOKING,
            self::DANCING,
            self::DUSK_SIGHT,
            self::FIGHT_WITH_BOWS,
            self::FIGHT_WITH_CROSSBOWS,
            self::FIRST_AID,
            self::GAMBLING,
            self::HANDLING_WITH_ANIMALS,
            self::HANDWORK,
            self::HERBALISM,
            self::HUNTING_AND_FISHING,
            self::KNOTTING,
            self::PAINTING,
            self::PEDAGOGY,
            self::PLAYING_ON_MUSIC_INSTRUMENT,
            self::SEDUCTION,
            self::SHOWMANSHIP,
            self::SINGING,
            self::STATUARY,
            self::TEACHING,
        ];
    }
}