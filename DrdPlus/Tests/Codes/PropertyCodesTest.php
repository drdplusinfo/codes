<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\PropertyCodes;

class PropertyCodesTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function I_can_get_base_properties_at_once()
    {
        $this->assertEquals(
            [
                PropertyCodes::STRENGTH,
                PropertyCodes::AGILITY,
                PropertyCodes::KNACK,
                PropertyCodes::WILL,
                PropertyCodes::INTELLIGENCE,
                PropertyCodes::CHARISMA
            ],
            PropertyCodes::getBaseProperties()
        );
    }
}
