<?php
namespace DrdPlus\Codes\Skills;

use DrdPlus\Codes\Partials\TranslatableCode;

/**
 * @method static SkillTypeCode getIt($codeValue)
 */
class SkillTypeCode extends TranslatableCode
{
    const PHYSICAL = 'physical';
    const PSYCHICAL = 'psychical';
    const COMBINED = 'combined';

    /**
     * @return array|string[]
     */
    protected static function getDefaultValues(): array
    {
        return [self::PHYSICAL, self::PSYCHICAL, self::COMBINED];
    }

    protected function fetchTranslations(): array
    {
        return [
            'cs' => [
                self::PHYSICAL => ['one' => 'fyzický'],
                self::PSYCHICAL => ['one' => 'psychický'],
                self::COMBINED => ['one' => 'kombinovaný'],
            ],
        ];
    }

}