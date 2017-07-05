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
    public static function getPossibleValues(): array
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

    private static $translations = [
        'en' => [
            self::BIG_HANDWORK => ['one' => 'big handwork'],
            self::COOKING => ['one' => 'cooking'],
            self::DANCING => ['one' => 'dancing'],
            self::DUSK_SIGHT => ['one' => 'dusk sight'],
            self::FIGHT_WITH_BOWS => ['one' => 'fight with bows'],
            self::FIGHT_WITH_CROSSBOWS => ['one' => 'fight with crossbows'],
            self::FIRST_AID => ['one' => 'first aid'],
            self::GAMBLING => ['one' => 'gambling'],
            self::HANDLING_WITH_ANIMALS => ['one' => 'handling with animals'],
            self::HANDWORK => ['one' => 'handwork'],
            self::HERBALISM => ['one' => 'herbalism'],
            self::HUNTING_AND_FISHING => ['one' => 'hunting and fishing'],
            self::KNOTTING => ['one' => 'knotting'],
            self::PAINTING => ['one' => 'painting'],
            self::PEDAGOGY => ['one' => 'pedagogy'],
            self::PLAYING_ON_MUSIC_INSTRUMENT => ['one' => 'playing on music instrument'],
            self::SEDUCTION => ['one' => 'seduction'],
            self::SHOWMANSHIP => ['one' => 'showmanship'],
            self::SINGING => ['one' => 'singing'],
            self::STATUARY => ['one' => 'statuary'],
            self::TEACHING => ['one' => 'teaching'],
        ],
        'cs' => [
            self::BIG_HANDWORK => ['one' => 'velké ruční práce'],
            self::COOKING => ['one' => 'vaření'],
            self::DANCING => ['one' => 'tanec'],
            self::DUSK_SIGHT => ['one' => 'šerozrakost'],
            self::FIGHT_WITH_BOWS => ['one' => 'boj s luky'],
            self::FIGHT_WITH_CROSSBOWS => ['one' => 'boj s kušemi'],
            self::FIRST_AID => ['one' => 'první pomoc'],
            self::GAMBLING => ['one' => 'hazardní hry'],
            self::HANDLING_WITH_ANIMALS => ['one' => 'zacházení se zvířaty'],
            self::HANDWORK => ['one' => 'ruční práce'],
            self::HERBALISM => ['one' => 'bylinkářství'],
            self::HUNTING_AND_FISHING => ['one' => 'lov a rybolov'],
            self::KNOTTING => ['one' => 'uzlování'],
            self::PAINTING => ['one' => 'malování'],
            self::PEDAGOGY => ['one' => 'vychovatelství'],
            self::PLAYING_ON_MUSIC_INSTRUMENT => ['one' => 'hra na hudební nástroj'],
            self::SEDUCTION => ['one' => 'svádění'],
            self::SHOWMANSHIP => ['one' => 'herectví'],
            self::SINGING => ['one' => 'zpěv'],
            self::STATUARY => ['one' => 'sochařství'],
            self::TEACHING => ['one' => 'vyučování'],
        ],
    ];

    protected function fetchTranslations(): array
    {
        return self::$translations;
    }

}