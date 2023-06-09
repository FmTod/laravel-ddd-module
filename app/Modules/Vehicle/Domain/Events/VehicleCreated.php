<?php


namespace App\Modules\Vehicle\Domain\Events;



use App\Modules\Vehicle\Domain\Models\Vehicle;

class VehicleCreated
{
    public $vehicle;

    public function __construct(Vehicle $part)
    {
        $this->vehicle = $part;
    }
}
