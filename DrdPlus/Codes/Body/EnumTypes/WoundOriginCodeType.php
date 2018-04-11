<?php
namespace DrdPlus\Codes\Body\EnumTypes;

use DrdPlus\Codes\Body\OrdinaryWoundOriginCode;
use DrdPlus\Codes\Body\SeriousWoundOriginCode;
use DrdPlus\Codes\EnumTypes\AbstractCodeType;

class WoundOriginCodeType extends AbstractCodeType
{
    public const WOUND_ORIGIN_CODE = 'wound_origin_code';

    /**
     * @return bool
     * @throws \Doctrine\DBAL\DBALException
     */
    public static function registerSelf(): bool
    {
        $registered = parent::registerSelf();
        /** @noinspection ExceptionsAnnotatingAndHandlingInspection */
        self::registerSubTypeEnum(
            OrdinaryWoundOriginCode::class,
            '~^' . OrdinaryWoundOriginCode::ORDINARY . '$~'
        );
        /** @noinspection ExceptionsAnnotatingAndHandlingInspection */
        self::registerSubTypeEnum(
            SeriousWoundOriginCode::class,
            '~^(?:(?!' . OrdinaryWoundOriginCode::ORDINARY . ').)*$~' // everything except the "ordinary" string
        );

        return $registered;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return self::WOUND_ORIGIN_CODE;
    }

}