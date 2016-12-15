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
use DrdPlus\Codes\GenderCode;
use DrdPlus\Codes\ItemHoldingCode;
use DrdPlus\Codes\Environment\LightConditionsCode;
use DrdPlus\Codes\MovementTypeCode;
use DrdPlus\Codes\ProfessionCode;
use DrdPlus\Codes\PropertyCode;
use DrdPlus\Codes\RaceCode;
use DrdPlus\Codes\RidingAnimalCode;
use DrdPlus\Codes\RidingAnimalMovementCode;
use DrdPlus\Codes\RidingAnimalPropertyCode;
use DrdPlus\Codes\Skills\CombinedSkillCode;
use DrdPlus\Codes\Skills\PhysicalSkillCode;
use DrdPlus\Codes\Skills\PsychicalSkillCode;
use DrdPlus\Codes\Skills\SkillTypeCode;
use DrdPlus\Codes\SubRaceCode;
use DrdPlus\Codes\Environment\TerrainCode;
use DrdPlus\Codes\TimeCode;

class CodeType extends AbstractCodeType
{
    const CODE = 'code';

    public static function registerSelf()
    {
        parent::registerSelf();
        // ARMAMENTS
        static::registerCodeAsSubType(ArrowCode::getIt(ArrowCode::BASIC_ARROW));
        static::registerCodeAsSubType(BodyArmorCode::getIt(BodyArmorCode::CHAINMAIL_ARMOR));
        static::registerCodeAsSubType(DartCode::getIt(DartCode::BASIC_DART));
        static::registerCodeAsSubType(HelmCode::getIt(HelmCode::BARREL_HELM));
        static::registerCodeAsSubType(MeleeWeaponCode::getIt(MeleeWeaponCode::HAND));
        static::registerCodeAsSubType(RangedWeaponCode::getIt(RangedWeaponCode::HEAVY_CROSSBOW));
        static::registerCodeAsSubType(ShieldCode::getIt(ShieldCode::BUCKLER));
        static::registerCodeAsSubType(SlingStoneCode::getIt(SlingStoneCode::SLING_STONE_HEAVIER));
        static::registerCodeAsSubType(WeaponCategoryCode::getIt(WeaponCategoryCode::ARROW));
        // BODY
        static::registerCodeAsSubType(ActivityAffectingHealingCode::getIt(ActivityAffectingHealingCode::LIGHT_ACTIVITY));
        static::registerCodeAsSubType(AfflictionByWoundDomainCode::getIt(AfflictionByWoundDomainCode::PHYSICAL));
        static::registerCodeAsSubType(ConditionsAffectingHealingCode::getIt(ConditionsAffectingHealingCode::BAD_CONDITIONS));
        static::registerCodeAsSubType(RestConditionsCode::getIt(RestConditionsCode::FOUL_CONDITIONS));
        static::registerCodeAsSubType(WoundsOriginCode::getIt(WoundsOriginCode::ELEMENTAL));
        static::registerCodeAsSubType(WoundTypeCode::getIt(WoundTypeCode::CRUSH));
        // COMBAT ACTIONS
        static::registerCodeAsSubType(CombatActionCode::getIt(CombatActionCode::ATTACKED_FROM_BEHIND));
        static::registerCodeAsSubType(MeleeCombatActionCode::getIt(MeleeCombatActionCode::COVER_OF_ALLY));
        static::registerCodeAsSubType(RangedCombatActionCode::getIt(RangedCombatActionCode::AIMED_SHOT));
        // ENVIRONMENT
        static::registerCodeAsSubType(TerrainCode::getIt(TerrainCode::DESERT));
        static::registerCodeAsSubType(LightConditionsCode::getIt(LightConditionsCode::STRONG_DAYLIGHT));
        static::registerCodeAsSubType(LightSourceCode::getIt(LightSourceCode::BALEFIRE));
        // SKILLS
        static::registerCodeAsSubType(CombinedSkillCode::getIt(CombinedSkillCode::BIG_HANDWORK));
        static::registerCodeAsSubType(PhysicalSkillCode::getIt(PhysicalSkillCode::ATHLETICS));
        static::registerCodeAsSubType(PsychicalSkillCode::getIt(PsychicalSkillCode::ASTRONOMY));
        static::registerCodeAsSubType(SkillTypeCode::getIt(SkillTypeCode::COMBINED));
        // OTHERS
        static::registerCodeAsSubType(ElementCode::getIt(ElementCode::AIR));
        static::registerCodeAsSubType(GenderCode::getIt(GenderCode::FEMALE));
        static::registerCodeAsSubType(ItemHoldingCode::getIt(ItemHoldingCode::MAIN_HAND));
        static::registerCodeAsSubType(MovementTypeCode::getIt(MovementTypeCode::RUN));
        static::registerCodeAsSubType(ProfessionCode::getIt(ProfessionCode::COMMONER));
        static::registerCodeAsSubType(PropertyCode::getIt(PropertyCode::AGE));
        static::registerCodeAsSubType(RaceCode::getIt(RaceCode::DWARF));
        static::registerCodeAsSubType(RidingAnimalCode::getIt(RidingAnimalCode::BULL));
        static::registerCodeAsSubType(RidingAnimalMovementCode::getIt(RidingAnimalMovementCode::CANTER));
        static::registerCodeAsSubType(RidingAnimalPropertyCode::getIt(RidingAnimalPropertyCode::DEFIANCE));
        static::registerCodeAsSubType(SubRaceCode::getIt(SubRaceCode::COMMON));
        static::registerCodeAsSubType(TimeCode::getIt(TimeCode::DAY));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return self::CODE;
    }

}