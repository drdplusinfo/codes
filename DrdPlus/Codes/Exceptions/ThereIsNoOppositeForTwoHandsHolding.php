<?php
declare(strict_types=1); // on PHP 7+ are standard PHP methods strict to types of given parameters

namespace DrdPlus\Codes\Exceptions;

use Doctrineum\Scalar\Exceptions\EnumClassNotFound;

class ThereIsNoOppositeForTwoHandsHolding extends EnumClassNotFound implements Logic
{

}