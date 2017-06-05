<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\Armaments\ArmorCode;
use DrdPlus\Codes\Armaments\ShieldCode;
use DrdPlus\Codes\ItemHoldingCode;
use DrdPlus\Codes\Partials\TranslatableCode;
use DrdPlus\Codes\Skills\SkillCode;
use Granam\Tests\Tools\TestWithMockery;

class AllTranslatableCodesTest extends TestWithMockery
{
    use GetCodeClassesTrait;

    /**
     * @test
     */
    public function I_can_get_its_english_translation()
    {
        foreach ($this->getTranslatableCodeClasses() as $codeClass) {
            $hasSinglesOnly = $this->hasSinglesOnly($codeClass);
            foreach ($codeClass::getPossibleValues() as $value) {
                /** @var TranslatableCode $sut */
                $sut = $codeClass::getIt($value);
                self::assertSame($this->codeToEnglish($value), $sut->translateTo('en'));
                self::assertSame($sut->translateTo('en'), $sut->translateTo('en', 1));
                if ($hasSinglesOnly || in_array($value, $this->getValuesSameInEnglishForAnyNumbers(), true)) {
                    self::assertSame($sut->translateTo('en', 1), $sut->translateTo('en', 2));
                } else {
                    self::assertNotSame(
                        $one = $sut->translateTo('en', 1),
                        $two = $sut->translateTo('en', 2),
                        "Expected different translation in english from $codeClass for numbers 1 and 2: $one, $two"
                    );
                }
                self::assertSame($sut->translateTo('en', 2), $sut->translateTo('en', 3));
                self::assertSame($sut->translateTo('en', 2), $sut->translateTo('en', 999));
            }
        }
    }

    protected function getValuesSameInEnglishForAnyNumbers(): array
    {
        return [
            'senses',
            'unarmed',
        ];
    }

    protected function hasSinglesOnly(string $codeClass): bool
    {
        foreach ([SkillCode::class, ArmorCode::class, ShieldCode::class, ItemHoldingCode::class] as $singleOnlyClass) {
            if (is_a($codeClass, $singleOnlyClass, true)) {
                return true;
            }
        }

        return false;
    }

    /**
     * @return array|TranslatableCode[]
     */
    private function getTranslatableCodeClasses(): array
    {
        $translatableCodeClasses = [];
        foreach ($this->getCodeClasses() as $codeClass) {
            if (!is_a($codeClass, TranslatableCode::class, true)) {
                continue;
            }
            $translatableCodeClasses[] = $codeClass;
        }

        return $translatableCodeClasses;
    }

    /**
     * @param string $code
     * @return string
     */
    protected function codeToEnglish(string $code): string
    {
        return str_replace(['_dm_', '_'], ['_DM_', ' '], $code);
    }

    /**
     * @test
     */
    public function I_can_get_its_czech_translation()
    {
        foreach ($this->getTranslatableCodeClasses() as $codeClass) {
            $hasSinglesOnly = $this->hasSinglesOnly($codeClass);
            foreach ($codeClass::getPossibleValues() as $value) {
                /** @var TranslatableCode $sut */
                $sut = $codeClass::getIt($value);
                $oneInEnglish = $this->codeToEnglish($value);
                $oneInCzech = $sut->translateTo('cs');
                self::assertSame($oneInCzech, $sut->translateTo('cs', 1));
                if (in_array($value, $this->getValuesSameInCzechAndEnglish(), true)) {
                    self::assertSame($oneInEnglish, $oneInCzech);
                } else {
                    self::assertNotSame(
                        $oneInEnglish,
                        $oneInCzech,
                        "Expected '{$value}' to be different in czech than in english"
                    );
                }
                $twoInCzech = $sut->translateTo('cs', 2);
                if ($hasSinglesOnly || in_array($oneInCzech, $this->getValuesSameInCzechForOneAndFew(), true)) {
                    self::assertSame(
                        $oneInCzech,
                        $twoInCzech,
                        "Expected same translation in czech from $codeClass for numbers 1 and 2: $oneInCzech, $twoInCzech"
                    );
                } else {
                    self::assertNotSame(
                        $oneInCzech,
                        $twoInCzech,
                        "Expected different translation in czech from $codeClass for numbers 1 and 2: $oneInCzech, $twoInCzech"
                    );
                }
                self::assertSame($twoInCzech, $threeInCzech = $sut->translateTo('cs', 3));
                self::assertSame($threeInCzech, $fourInCzech = $sut->translateTo('cs', 4));
                $fiveInCzech = $sut->translateTo('cs', 5);
                if ($hasSinglesOnly || in_array($fourInCzech, $this->getValuesSameInCzechForFewAndMany(), true)) {
                    self::assertSame($fourInCzech, $fiveInCzech);
                } else {
                    self::assertNotSame(
                        $fourInCzech,
                        $fiveInCzech,
                        "Expected different translation in czech from $codeClass for numbers 4 and 5: $fourInCzech, $fiveInCzech"
                    );
                }
                self::assertSame($fiveInCzech, $sut->translateTo('cs', 6));
                self::assertSame($fiveInCzech, $sut->translateTo('cs', 999));
            }
        }
    }

    /**
     * @return array|string[]
     */
    protected function getValuesSameInCzechAndEnglish(): array
    {
        return ['charisma'];
    }

    /**
     * @return array|string[]
     */
    protected function getValuesSameInCzechForOneAndFew(): array
    {
        return [
            'vůle',
            'inteligence',
            'smysly',
            'maximální naložení',
            'infravize',
            'šavle',
            'kopí',
            'vidle',
            'minikuše',
            'hvězdice',
            'beze zbraně',
            'kuše',
        ];
    }

    /**
     * @return array|string[]
     */
    protected function getValuesSameInCzechForFewAndMany(): array
    {
        return [
            'smysly',
            'kopí',
            'beze zbraně',
            'kněží',
        ];
    }

    /**
     * @test
     */
    public function I_get_warning_for_unknown_locale()
    {
        foreach ($this->getTranslatableCodeClasses() as $codeClass) {
            foreach ($codeClass::getPossibleValues() as $value) {
                /** @var TranslatableCode $sut */
                $sut = $codeClass::getIt($value);
                $inEnglish = $this->codeToEnglish($value);
                $previousErrorReporting = error_reporting(-1 ^ E_USER_WARNING);
                error_clear_last();
                self::assertSame($inEnglish, $sut->translateTo('demonic'));
                $lastError = error_get_last();
                error_reporting($previousErrorReporting);
                error_clear_last();
                self::assertNotEmpty($lastError);
                self::assertSame(E_USER_WARNING, $lastError['type']);
                self::assertContains($value, $lastError['message']);
                self::assertContains('demonic', $lastError['message']);
            }
        }
    }
}