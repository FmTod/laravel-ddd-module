<?php

namespace App\Modules\Vehicle\Domain\Exceptions;

use Exception;

class VehicleNotFoundException extends Exception
{
    protected $message = 'Vehicle not found.';
}
