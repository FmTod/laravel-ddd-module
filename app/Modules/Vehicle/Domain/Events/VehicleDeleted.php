<?php


namespace App\Modules\Vehicle\Domain\Events;


use App\Modules\Vehicle\Domain\Models\Vehicle;

class VehicleDeleted
{
    public $vehicle;

    public function __construct(Vehicle $vehicle)
    {
        $this->vehicle = $vehicle;
    }
}
