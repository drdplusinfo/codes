<?php
declare(strict_types=1); // on PHP 7+ are standard PHP methods strict to types of given parameters

namespace DrdPlus\Codes\Partials;

interface Translatable
{
    /**
     * @param string $languageCode
     * @param int $amount
     * @return string
     */
    public function translateTo(string $languageCode, $amount = 1): string;
}