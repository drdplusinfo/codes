<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\PropertyCodes;

class PropertyCodesTest extends AbstractCodesTest
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
            PropertyCodes::getBasePropertyCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
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
                'weight_in_kg',
                'weight',
                'size',
            ],
            PropertyCodes::getBodyPropertyCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
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
            ],
            PropertyCodes::getDerivedPropertyCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
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
            ],
            PropertyCodes::getNativePropertyCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }

    /**
     * @test
     */
    public function I_can_get_remarkable_property_codes()
    {
        $this->I_can_get_codes_by_same_named_constants(['remarkable_sense']);

        self::assertEquals(
            $expectedCodes = [
                'hearing',
                'sight',
                'smell',
                'taste',
                'touch',
            ],
            PropertyCodes::getRemarkablePropertyCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
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
            PropertyCodes::getRestrictionPropertyCodes()
        );
        $this->I_can_get_codes_by_same_named_constants($expectedCodes);
    }

    /**
     * @test
     */
    public function I_can_get_all_codes_at_once()
    {
        self::assertSame(
            [
                'strength',
                'agility',
                'knack',
                'will',
                'intelligence',
                'charisma',
                'age',
                'height_in_cm',
                'weight_in_kg',
                'weight',
                'size',
                'beauty',
                'dangerousness',
                'dignity',
                'endurance',
                'fatigue_boundary',
                'senses',
                'speed',
                'toughness',
                'wound_boundary',
                'infravision',
                'native_regeneration',
                'hearing',
                'sight',
                'smell',
                'taste',
                'touch',
                'requires_dm_agreement',
            ],
            PropertyCodes::getPropertyCodes()
        );
    }

}
