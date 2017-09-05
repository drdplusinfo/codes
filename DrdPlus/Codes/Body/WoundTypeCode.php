<?php
namespace DrdPlus\Codes\Body;

use DrdPlus\Codes\Partials\TranslatableCode;

/**
 * @method static WoundTypeCode getIt($codeValue)
 */
class WoundTypeCode extends TranslatableCode
{
    const CRUSH = 'crush';
    const STAB = 'stab';
    const CUT = 'cut';

    /**
     * @return array|string
     */
    protected static function getDefaultValues(): array
    {
        return [
            self::CRUSH,
            self::STAB,
            self::CUT,
        ];
    }

    /**
     * @return bool
     */
    public function isCrush(): bool
    {
        return $this->getValue() === self::CRUSH;
    }

    /**
     * @return bool
     */
    public function isStab(): bool
    {
        return $this->getValue() === self::STAB;
    }

    /**
     * @return bool
     */
    public function isCut(): bool
    {
        return $this->getValue() === self::CUT;
    }

    protected function fetchTranslations(): array
    {
        return [
            'cs' => [
                self::STAB => ['one' => 'bodné', 'few' => 'bodná', 'many' => 'bodných'],
                self::CRUSH => ['one' => 'drtivé', 'few' => 'drtivá', 'many' => 'drtivých'],
                self::CUT => ['one' => 'sečné', 'few' => 'sečná', 'many' => 'sečných'],
            ],
            'en' => [
                self::STAB => ['one' => 'stab', 'few' => 'stabs', 'many' => 'stabs'],
                self::CRUSH => ['one' => 'crush', 'few' => 'crushes', 'many' => 'crushes'],
                self::CUT => ['one' => 'cut', 'few' => 'cuts', 'many' => 'cuts'],
            ],
        ];
    }

}