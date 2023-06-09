<?php

namespace App\Modules\Part\Domain\Exceptions;

use Exception;

class PartNotFoundException extends Exception
{
    protected $message = 'Part not found.';
}
