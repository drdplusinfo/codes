<?php
namespace DrdPlus\Codes\Environment;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static LightSourceCode getIt($codeValue)
 */
class LightSourceCode extends AbstractCode
{
    const EMBERS_IN_FIRE = 'embers_in_fire';
    const CANDLE = 'candle';
    const TRIPLE_CANDELABRA_OR_WORSE_TORCH = 'triple_candelabra_or_worse_torch';
    const BETTER_TORCH_OR_SEVEN_CANDELABRA = 'better_torch_or_seven_candelabra';
    const LANTERN = 'lantern';
    const CAMP_FIRE = 'camp_fire';
    const BALEFIRE = 'balefire';
    const LIGHT_HOUSE = 'light_house';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues()
    {
        return [
            self::EMBERS_IN_FIRE,
            self::CANDLE,
            self::TRIPLE_CANDELABRA_OR_WORSE_TORCH,
            self::BETTER_TORCH_OR_SEVEN_CANDELABRA,
            self::LANTERN,
            self::CAMP_FIRE,
            self::BALEFIRE,
            self::LIGHT_HOUSE,
        ];
    }

}