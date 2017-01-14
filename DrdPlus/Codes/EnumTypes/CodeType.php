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
use DrdPlus\Codes\ElementCode;
use DrdPlus\Codes\Environment\LightSourceCode;
use DrdPlus\Codes\Environment\LightSourceEnvironmentCode;
use DrdPlus\Codes\GenderCode;
use DrdPlus\Codes\ItemHoldingCode;
use DrdPlus\Codes\Environment\LightConditionsCode;
use DrdPlus\Codes\ProfessionCode;
use DrdPlus\Codes\PropertyCode;
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
        static::registerCodeAsSubType(ArrowCode::class);
        static::registerCodeAsSubType(BodyArmorCode::class);
        static::registerCodeAsSubType(DartCode::class);
        static::registerCodeAsSubType(HelmCode::class);
        static::registerCodeAsSubType(MeleeWeaponCode::class);
        static::registerCodeAsSubType(RangedWeaponCode::class);
        static::registerCodeAsSubType(ShieldCode::class);
        static::registerCodeAsSubType(SlingStoneCode::class);
        static::registerCodeAsSubType(WeaponCategoryCode::class);
        // BODY
        static::registerCodeAsSubType(ActivityAffectingHealingCode::class);
        static::registerCodeAsSubType(AfflictionByWoundDomainCode::class);
        static::registerCodeAsSubType(ConditionsAffectingHealingCode::class);
        static::registerCodeAsSubType(RestConditionsCode::class);
        static::registerCodeAsSubType(WoundsOriginCode::class);
        static::registerCodeAsSubType(WoundTypeCode::class);
        // COMBAT ACTIONS
        static::registerCodeAsSubType(CombatActionCode::class);
        static::registerCodeAsSubType(MeleeCombatActionCode::class);
        static::registerCodeAsSubType(RangedCombatActionCode::class);
        // ENVIRONMENT
        static::registerCodeAsSubType(LightConditionsCode::class);
        static::registerCodeAsSubType(LightSourceCode::class);
        static::registerCodeAsSubType(LightSourceEnvironmentCode::class);
        static::registerCodeAsSubType(TerrainCode::class);
        // HISTORY
        static::registerCodeAsSubType(ChoiceCode::class);
        static::registerCodeAsSubType(FateCode::class);
        // SKILLS
        static::registerCodeAsSubType(CombinedSkillCode::class);
        static::registerCodeAsSubType(PhysicalSkillCode::class);
        static::registerCodeAsSubType(PsychicalSkillCode::class);
        static::registerCodeAsSubType(SkillTypeCode::class);
        // OTHERS
        static::registerCodeAsSubType(ElementCode::class);
        static::registerCodeAsSubType(GenderCode::class);
        static::registerCodeAsSubType(ItemHoldingCode::class);
        static::registerCodeAsSubType(MovementTypeCode::class);
        static::registerCodeAsSubType(ProfessionCode::class);
        static::registerCodeAsSubType(PropertyCode::class);
        static::registerCodeAsSubType(RaceCode::class);
        static::registerCodeAsSubType(RidingAnimalCode::class);
        static::registerCodeAsSubType(RidingAnimalMovementCode::class);
        static::registerCodeAsSubType(RidingAnimalPropertyCode::class);
        static::registerCodeAsSubType(SubRaceCode::class);
        static::registerCodeAsSubType(TimeCode::class);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return self::CODE;
    }

}