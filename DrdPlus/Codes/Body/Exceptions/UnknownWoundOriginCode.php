<?php
declare(strict_types=1); // on PHP 7+ are standard PHP methods strict to types of given parameters

namespace DrdPlus\Codes\Body\Exceptions;

use DrdPlus\Codes\Partials\Exceptions\UnknownValueForCode;

class UnknownWoundOriginCode extends UnknownValueForCode implements Logic
{

}