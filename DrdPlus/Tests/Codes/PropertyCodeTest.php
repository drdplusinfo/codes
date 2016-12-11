<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\PropertyCode;

class PropertyCodeTest extends AbstractCodeTest
{
    /**
     * @test
     */
    public function I_can_get_base_property_codes()
    {
        self::assertEquals(
            $expectedCodes = [
                'strength',
                'agility',
                'knack',
                'will',
                'intelligence',
                'charisma'
            ],
            PropertyCode::getBasePropertyPossibleValues()
        );
    }

    /**
     * @test
     */
    public function I_can_get_body_property_codes()
    {
        self::assertEquals(
            $expectedCodes = [
                'age',
                'height_in_cm',
                'height',
                'weight_in_kg',
                'weight',
                'size',
            ],
            PropertyCode::getBodyPropertyPossibleValues()
        );
    }

    /**
     * @test
     */
    public function I_can_get_derived_property_codes()
    {
        self::assertEquals(
            $expectedCodes = [
                'beauty',
                'dangerousness',
                'dignity',
                'endurance',
                'fatigue_boundary',
                'senses',
                'speed',
                'toughness',
                'wound_boundary',
                'movement_speed',
                'maximal_load',
            ],
            PropertyCode::getDerivedPropertyPossibleValues()
        );
    }

    /**
     * @test
     */
    public function I_can_get_native_property_codes()
    {
        self::assertEquals(
            $expectedCodes = [
                'infravision',
                'native_regeneration',
                'remarkable_sense',
            ],
            PropertyCode::getNativePropertyPossibleValues()
        );
    }

    /**
     * @test
     */
    public function I_can_get_remarkable_property_codes()
    {
        self::assertEquals(
            $expectedCodes = [
                'hearing',
                'sight',
                'smell',
                'taste',
                'touch',
            ],
            PropertyCode::getRemarkableSensePropertyPossibleValues()
        );
    }

    /**
     * @test
     */
    public function I_can_get_restriction_property_codes()
    {
        self::assertEquals(
            $expectedCodes = [
                'requires_dm_agreement',
            ],
            PropertyCode::getRestrictionPropertyPossibleValues()
        );
    }
}