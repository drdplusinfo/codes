<?php
namespace DrdPlus\Codes\EnumTypes;

use DrdPlus\Codes\ActivityIntensityCode;
use DrdPlus\Codes\Armaments\ArrowCode;
use DrdPlus\Codes\Armaments\BodyArmorCode;
use DrdPlus\Codes\Armaments\DartCode;
use DrdPlus\Codes\Armaments\HelmCode;
use DrdPlus\Codes\Armaments\MeleeWeaponCode;
use DrdPlus\Codes\Armaments\RangedWeaponCode;
use DrdPlus\Codes\Armaments\ShieldCode;
use DrdPlus\Codes\Armaments\SlingStoneCode;
use DrdPlus\Codes\Armaments\WeaponCategoryCode;
use DrdPlus\Codes\Body\HealingAffectingActivityCode;
use DrdPlus\Codes\Body\AfflictionByWoundDomainCode;
use DrdPlus\Codes\Body\ConditionsAffectingHealingCode;
use DrdPlus\Codes\Body\RestConditionsCode;
use DrdPlus\Codes\Body\WoundsOriginCode;
use DrdPlus\Codes\Body\WoundTypeCode;
use DrdPlus\Codes\CombatActions\CombatActionCode;
use DrdPlus\Codes\CombatActions\MeleeCombatActionCode;
use DrdPlus\Codes\CombatActions\RangedCombatActionCode;
use DrdPlus\Codes\CombatCharacteristicCode;
use DrdPlus\Codes\Units\DistanceUnitCode;
use DrdPlus\Codes\ElementCode;
use DrdPlus\Codes\Environment\ItemStealthinessCode;
use DrdPlus\Codes\Environment\LandingSurfaceCode;
use DrdPlus\Codes\Environment\LightSourceCode;
use DrdPlus\Codes\Environment\LightSourceEnvironmentCode;
use DrdPlus\Codes\Environment\MaterialCode;
use DrdPlus\Codes\FoodTypeCode;
use DrdPlus\Codes\GenderCode;
use DrdPlus\Codes\History\AncestryCode;
use DrdPlus\Codes\History\ExceptionalityCode;
use DrdPlus\Codes\ItemHoldingCode;
use DrdPlus\Codes\Environment\LightConditionsCode;
use DrdPlus\Codes\JumpMovementCode;
use DrdPlus\Codes\JumpTypeCode;
use DrdPlus\Codes\ProfessionCode;
use DrdPlus\Codes\Properties\CharacteristicForGameCode;
use DrdPlus\Codes\Properties\PropertyCode;
use DrdPlus\Codes\Properties\RemarkableSenseCode;
use DrdPlus\Codes\RaceCode;
use DrdPlus\Codes\SearchingItemTypeCode;
use DrdPlus\Codes\Units\SpeedUnitCode;
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
use DrdPlus\Codes\History\ChoiceCode;
use DrdPlus\Codes\History\FateCode;
use DrdPlus\Codes\Units\TimeUnitCode;
use DrdPlus\Codes\Units\WeightUnitCode;

class CodeType extends AbstractCodeType
{
    public const CODE = 'code';

    public static function registerSelf(): bool
    {
        $somethingRegistered = parent::registerSelf();
        // ARMAMENTS
        $somethingRegistered = static::registerCode(ArrowCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(BodyArmorCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(DartCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(HelmCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(MeleeWeaponCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(RangedWeaponCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(ShieldCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(SlingStoneCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(WeaponCategoryCode::class) || $somethingRegistered;
        // BODY
        $somethingRegistered = static::registerCode(HealingAffectingActivityCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(AfflictionByWoundDomainCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(ConditionsAffectingHealingCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(RestConditionsCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(WoundsOriginCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(WoundTypeCode::class) || $somethingRegistered;
        // COMBAT ACTIONS
        $somethingRegistered = static::registerCode(CombatActionCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(MeleeCombatActionCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(RangedCombatActionCode::class) || $somethingRegistered;
        // ENVIRONMENT
        $somethingRegistered = static::registerCode(ItemStealthinessCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(LandingSurfaceCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(LightConditionsCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(LightSourceCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(LightSourceEnvironmentCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(MaterialCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(TerrainCode::class) || $somethingRegistered;
        // HISTORY
        $somethingRegistered = static::registerCode(AncestryCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(ExceptionalityCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(ChoiceCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(FateCode::class) || $somethingRegistered;
        // PROPERTIES
        $somethingRegistered = static::registerCode(CharacteristicForGameCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(CombatCharacteristicCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(PropertyCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(RemarkableSenseCode::class) || $somethingRegistered;
        // SKILL
        $somethingRegistered = static::registerCode(CombinedSkillCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(PhysicalSkillCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(PsychicalSkillCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(SkillTypeCode::class) || $somethingRegistered;
        // TRANSPORT
        $somethingRegistered = static::registerCode(MovementTypeCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(RidingAnimalCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(RidingAnimalMovementCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(RidingAnimalPropertyCode::class) || $somethingRegistered;
        // UNIT
        $somethingRegistered = static::registerCode(DistanceUnitCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(SpeedUnitCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(TimeUnitCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(WeightUnitCode::class) || $somethingRegistered;
        // OTHER
        $somethingRegistered = static::registerCode(ActivityIntensityCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(CombatCharacteristicCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(ElementCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(FoodTypeCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(GenderCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(ItemHoldingCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(JumpMovementCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(JumpTypeCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(ProfessionCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(RaceCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(SearchingItemTypeCode::class) || $somethingRegistered;
        $somethingRegistered = static::registerCode(SubRaceCode::class) || $somethingRegistered;

        return $somethingRegistered;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return self::CODE;
    }
}