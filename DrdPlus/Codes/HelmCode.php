<?php
namespace DrdPlus\Codes;

class HelmCode extends ArmorCode
{

    const WITHOUT_HELM = 'without_helm';
    const LEATHER_CAP = 'leather_cap';
    const CHAINMAIL_HOOD = 'chainmail_hood';
    const CONICAL_HELM = 'conical_helm';
    const FULL_HELM = 'full_helm';
    const BARREL_HELM = 'barrel_helm';
    const GREAT_HELM = 'great_helm';

    /**
     * @return array|string[]
     */
    public static function getHelmCodes()
    {
        return [
            self::WITHOUT_HELM,
            self::LEATHER_CAP,
            self::CHAINMAIL_HOOD,
            self::CONICAL_HELM,
            self::FULL_HELM,
            self::BARREL_HELM,
            self::GREAT_HELM
        ];
    }

    /**
     * @return bool
     */
    public function isHelm()
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isBodyArmor()
    {
        return false;
    }

}