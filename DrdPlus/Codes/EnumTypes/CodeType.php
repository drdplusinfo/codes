<?php
namespace DrdPlus\Codes\EnumTypes;

use DrdPlus\Codes\Armaments\ArrowCode;
use DrdPlus\Codes\Armaments\BodyArmorCode;
use DrdPlus\Codes\Armaments\DartCode;
use DrdPlus\Codes\Armaments\HelmCode;
use DrdPlus\Codes\Armaments\MeleeWeaponCode;
use DrdPlus\Codes\Armaments\RangedWeaponCode;
use DrdPlus\Codes\Armaments\ShieldCode;
use DrdPlus\Codes\Armaments\SlingStoneCode;
use DrdPlus\Codes\Armaments\WeaponCategoryCode;
use DrdPlus\Codes\Body\ActivityAffectingHealingCode;
use DrdPlus\Codes\Body\AfflictionByWoundDomainCode;
use DrdPlus\Codes\Body\ConditionsAffectingHealingCode;
use DrdPlus\Codes\Body\RestConditionsCode;
use DrdPlus\Codes\Body\WoundsOriginCode;
use DrdPlus\Codes\Body\WoundTypeCode;
use DrdPlus\Codes\CombatActions\CombatActionCode;
use DrdPlus\Codes\CombatActions\MeleeCombatActionCode;
use DrdPlus\Codes\CombatActions\RangedCombatActionCode;
use DrdPlus\Codes\CombatCharacteristicCode;
use DrdPlus\Codes\ElementCode;
use DrdPlus\Codes\Environment\LightSourceCode;
use DrdPlus\Codes\Environment\LightSourceEnvironmentCode;
use DrdPlus\Codes\GenderCode;
use DrdPlus\Codes\History\AncestryCode;
use DrdPlus\Codes\History\ExceptionalityCode;
use DrdPlus\Codes\ItemHoldingCode;
use DrdPlus\Codes\Environment\LightConditionsCode;
use DrdPlus\Codes\ProfessionCode;
use DrdPlus\Codes\Properties\CharacteristicForGameCode;
use DrdPlus\Codes\Properties\PropertyCode;
use DrdPlus\Codes\Properties\RemarkableSenseCode;
use DrdPlus\Codes\RaceCode;
use DrdPlus\Codes\Transport\MovementTypeCode;
use DrdPlus\Codes\Transport\RidingAnimalCode;
use DrdPlus\Codes\Transport\RidingAnimalMovementCode;
use DrdPlus\Codes\Transport\RidingAnimalPropertyCode;
use DrdPlus\Codes\Skills\CombinedSkillCode;
use DrdPlus\Codes\Skills\PhysicalSkillCode;
use DrdPlus\Codes\Skills\PsychicalSkillCode;
use DrdPlus\Codes\Skills\SkillTypeCode;
use DrdPlus\Codes\SubRaceCode;
use DrdPlus\Codes\Environment\TerrainCode;
use DrdPlus\Codes\TimeCode;
use DrdPlus\Codes\History\ChoiceCode;
use DrdPlus\Codes\History\FateCode;

class CodeType extends AbstractCodeType
{
    const CODE = 'code';

    public static function registerSelf()
    {
        parent::registerSelf();
        // ARMAMENTS
        static::registerCode(ArrowCode::class);
        static::registerCode(BodyArmorCode::class);
        static::registerCode(DartCode::class);
        static::registerCode(HelmCode::class);
        static::registerCode(MeleeWeaponCode::class);
        static::registerCode(RangedWeaponCode::class);
        static::registerCode(ShieldCode::class);
        static::registerCode(SlingStoneCode::class);
        static::registerCode(WeaponCategoryCode::class);
        // BODY
        static::registerCode(ActivityAffectingHealingCode::class);
        static::registerCode(AfflictionByWoundDomainCode::class);
        static::registerCode(ConditionsAffectingHealingCode::class);
        static::registerCode(RestConditionsCode::class);
        static::registerCode(WoundsOriginCode::class);
        static::registerCode(WoundTypeCode::class);
        // COMBAT ACTIONS
        static::registerCode(CombatActionCode::class);
        static::registerCode(MeleeCombatActionCode::class);
        static::registerCode(RangedCombatActionCode::class);
        // ENVIRONMENT
        static::registerCode(LightConditionsCode::class);
        static::registerCode(LightSourceCode::class);
        static::registerCode(LightSourceEnvironmentCode::class);
        static::registerCode(TerrainCode::class);
        // HISTORY
        static::registerCode(AncestryCode::class);
        static::registerCode(ExceptionalityCode::class);
        static::registerCode(ChoiceCode::class);
        static::registerCode(FateCode::class);
        // PROPERTIES
        static::registerCode(CharacteristicForGameCode::class);
        static::registerCode(CombatCharacteristicCode::class);
        static::registerCode(PropertyCode::class);
        static::registerCode(RemarkableSenseCode::class);
        // SKILLS
        static::registerCode(CombinedSkillCode::class);
        static::registerCode(PhysicalSkillCode::class);
        static::registerCode(PsychicalSkillCode::class);
        static::registerCode(SkillTypeCode::class);
        // TRANSPORT
        static::registerCode(MovementTypeCode::class);
        static::registerCode(RidingAnimalCode::class);
        static::registerCode(RidingAnimalMovementCode::class);
        static::registerCode(RidingAnimalPropertyCode::class);
        // OTHERS
        static::registerCode(CombatCharacteristicCode::class);
        static::registerCode(ElementCode::class);
        static::registerCode(GenderCode::class);
        static::registerCode(ItemHoldingCode::class);
        static::registerCode(ProfessionCode::class);
        static::registerCode(RaceCode::class);
        static::registerCode(SubRaceCode::class);
        static::registerCode(TimeCode::class);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return self::CODE;
    }

}