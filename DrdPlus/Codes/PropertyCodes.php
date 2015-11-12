<?php
namespace DrdPlus\Codes;

class PropertyCodes
{
    // base
    const STRENGTH = 'strength';
    const AGILITY = 'agility';
    const KNACK = 'knack';
    const WILL = 'will';
    const INTELLIGENCE = 'intelligence';
    const CHARISMA = 'charisma';

    // body
    const HEIGHT_IN_CM = 'height_in_cm';
    const WEIGHT_IN_KG = 'weight_in_kg';
    const SIZE = 'size';

    // derived
    const BEAUTY = 'beauty';
    const DANGEROUSNESS = 'dangerousness';
    const DIGNITY = 'dignity';
    const ENDURANCE = 'endurance';
    const FATIGUE_LIMIT = 'fatigue_limit';
    const SENSES = 'senses';
    const SPEED = 'speed';
    const TOUGHNESS = 'toughness';
    const WOUNDS_LIMIT = 'wounds_limit';
    
    // native
    const INFRAVISION = 'infravision';
    const NATIVE_REGENERATION = 'native_regeneration';
    
    // remarkable senses
    const HEARING = 'hearing';
    const SIGHT = 'sight';
    const SMELL = 'smell';
    const TASTE = 'taste';
    const TOUCH = 'touch';
    
    // restrictions
    const REQUIRES_DM_AGREEMENT = 'requires_dm_agreement';
}
