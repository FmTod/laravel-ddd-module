<?php

namespace App\Modules\Vehicle\Infrastructure\Repositories;

use App\Modules\Vehicle\Domain\Models\Vehicle;

interface VehicleRepository
{
    public function getById($vehicleId);
    public function getAll();
    public function getIdName();
    public function create(array $data);
    public function update(Vehicle $vehicle, array $data);
    public function delete(Vehicle $vehicle);
}
