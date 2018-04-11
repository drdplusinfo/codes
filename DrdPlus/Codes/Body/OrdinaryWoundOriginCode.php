<?php
namespace DrdPlus\Codes\Body;

use DrdPlus\Codes\Partials\AbstractCode;
use Granam\String\StringInterface;
use Granam\Tools\ValueDescriber;

class OrdinaryWoundOriginCode extends WoundOriginCode
{
    public const ORDINARY = 'ordinary';

    /**
     * @param string|StringInterface $codeValue
     * @return OrdinaryWoundOriginCode|AbstractCode
     */
    public static function getIt($codeValue = self::ORDINARY): AbstractCode
    {
        return parent::getIt($codeValue);
    }

    /**
     * @param bool|float|int|string $enumValue
     * @return string
     * @throws \DrdPlus\Codes\Body\Exceptions\UnknownWoundOriginCode
     * @throws \Doctrineum\Scalar\Exceptions\UnexpectedValueToEnum
     */
    protected static function convertToEnumFinalValue($enumValue): string
    {
        $enumFinalValue = parent::convertToEnumFinalValue($enumValue);
        if ($enumFinalValue !== self::ORDINARY) {
            throw new Exceptions\UnknownWoundOriginCode(
                'Got unexpected code of wound origin ' . ValueDescriber::describe($enumValue)
            );
        }

        return $enumFinalValue;
    }

    /**
     * @return bool
     */
    public function isSeriousWoundOrigin(): bool
    {
        return false;
    }

    /**
     * @return bool
     */
    public function isOrdinaryWoundOrigin(): bool
    {
        return true;
    }

    protected function fetchTranslations(): array
    {
        return [
            'cs' => [self::ORDINARY => ['one' => 'bežné']],
            'en' => [self::ORDINARY => ['one' => 'ordinary']],
        ];
    }
}