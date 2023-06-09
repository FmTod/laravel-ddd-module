<?php

namespace App\Modules\Vehicle\Infrastructure\Repositories;

use App\Modules\Vehicle\Domain\Events\VehicleCreated;
use App\Modules\Vehicle\Domain\Models\Vehicle;

class EloquentVehicleRepository implements VehicleRepository
{
    public function getById($vehicleId)
    {
        return Vehicle::find($vehicleId);
    }

    public function getAll()
    {
        return Vehicle::all();
    }

    public function create(array $data)
    {
        return Vehicle::create($data);
    }

    public function update(Vehicle $vehicle, array $data)
    {
        $vehicle->update($data);

        return $vehicle;
    }

    public function delete(Vehicle $vehicle)
    {
        $vehicle->delete();
    }

    public function getIdName()
    {
        return Vehicle::pluck('name', 'id');
    }
}
