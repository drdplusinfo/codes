<?php
namespace DrdPlus\Codes\Skills;

/**
 * @method static CombinedSkillCode getIt($codeValue)
 * @method static CombinedSkillCode findIt($codeValue)
 */
class CombinedSkillCode extends SkillCode
{
    // COMBINED
    public const BIG_HANDWORK = 'big_handwork';
    public const COOKING = 'cooking';
    public const DANCING = 'dancing';
    public const DUSK_SIGHT = 'dusk_sight';
    public const FIGHT_WITH_BOWS = 'fight_with_bows';
    public const FIGHT_WITH_CROSSBOWS = 'fight_with_crossbows';
    public const FIRST_AID = 'first_aid';
    public const GAMBLING = 'gambling';
    public const HANDLING_WITH_ANIMALS = 'handling_with_animals';
    public const HANDWORK = 'handwork';
    public const HERBALISM = 'herbalism';
    public const HUNTING_AND_FISHING = 'hunting_and_fishing';
    public const KNOTTING = 'knotting';
    public const PAINTING = 'painting';
    public const PEDAGOGY = 'pedagogy';
    public const PLAYING_ON_MUSIC_INSTRUMENT = 'playing_on_music_instrument';
    public const SEDUCTION = 'seduction';
    public const SHOWMANSHIP = 'showmanship';
    public const SINGING = 'singing';
    public const STATUARY = 'statuary';
    public const TEACHING = 'teaching';

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

    protected function fetchTranslations(): array
    {
        return [
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
    }

}