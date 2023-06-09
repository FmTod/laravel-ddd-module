<?php

namespace App\Modules\Vehicle\Domain\Services;

use App\Modules\Vehicle\Domain\Models\Vehicle;

interface VehicleService
{
    public function getAllVehicles();
    public function createVehicle(array $data);
    public function updateVehicle(Vehicle $vehicle, array $data);
    public function deleteVehicle(Vehicle $vehicle);
    public function getVehicleById($vehicleId);
    public function getVehicleParts($vehicleId);
    public function getVehicleIdNames();
}
