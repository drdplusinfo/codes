<?php
namespace DrdPlus\Codes\EnumTypes;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrineum\Scalar\Exceptions\UnexpectedValueToDatabaseValue;
use Doctrineum\Scalar\ScalarEnumType;
use DrdPlus\Codes\Code;
use Granam\Tools\ValueDescriber;

abstract class AbstractCodeType extends ScalarEnumType
{

    /**
     * @param Code $code
     * @return bool
     */
    protected static function registerCodeAsSubType(Code $code)
    {
        $codeClass = get_class($code);
        /** @noinspection ExceptionsAnnotatingAndHandlingInspection */
        if (static::hasSubTypeEnum($codeClass)) {
            return false;
        }

        /** @noinspection ExceptionsAnnotatingAndHandlingInspection */
        return static::addSubTypeEnum($codeClass, '~^' . preg_quote($codeClass, '~') . '::\w+$~');
    }

    /**
     * Prefixes code value by its class for later identification on restoring from database.
     *
     * @param Code $code
     * @param AbstractPlatform $platform
     * @return null|string
     * @throws \Doctrineum\Scalar\Exceptions\UnexpectedValueToDatabaseValue
     */
    public function convertToDatabaseValue($code, AbstractPlatform $platform)
    {
        if ($code === null) {
            return null;
        }
        if (!is_object($code) || !is_a($code, Code::class)) {
            throw new UnexpectedValueToDatabaseValue(
                'Expected NULL or instance of ' . Code::class . ', got ' . ValueDescriber::describe($code)
            );
        }

        return get_class($code) . '::' . $code->getValue();
    }

    /**
     * @param $valueForEnum
     * @return float|int|null|string
     * @throws \Doctrineum\Scalar\Exceptions\UnexpectedValueToEnum
     */
    protected function prepareValueForEnum($valueForEnum)
    {
        $valueForEnum = parent::prepareValueForEnum($valueForEnum);

        // like DrdPlus\Codes\Armaments\MeleeWeaponCode::light_axe = light_axe
        return preg_replace('~[^:]+::~', '', $valueForEnum);
    }

}