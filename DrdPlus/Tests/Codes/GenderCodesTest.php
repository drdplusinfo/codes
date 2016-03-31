<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\GenderCodes;

class GenderCodesTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function I_acn_get_all_genders_at_once()
    {
        self::assertEquals(['male', 'female'], GenderCodes::getGenderCodes());
    }
}
