<?php

namespace App\Modules\Vehicle\Domain\Services;

use App\Modules\Vehicle\Domain\Models\Vehicle;
use App\Modules\Vehicle\Infrastructure\Repositories\VehicleRepository;

class VehicleServiceImpl implements VehicleService
{
    private $vehicleRepository;

    public function __construct(VehicleRepository $vehicleRepository)
    {
        $this->vehicleRepository = $vehicleRepository;
    }

    public function getAllVehicles()
    {
        return $this->vehicleRepository->getAll();
    }

    public function createVehicle(array $data)
    {
        return $this->vehicleRepository->create($data);
    }

    public function updateVehicle(Vehicle $vehicle, array $data)
    {
        return $this->vehicleRepository->update($vehicle, $data);
    }

    public function deleteVehicle(Vehicle $vehicle)
    {
        $this->vehicleRepository->delete($vehicle);
    }

    public function getVehicleById($vehicleId)
    {
        return $this->vehicleRepository->getById($vehicleId);
    }

    public function getVehicleParts($vehicleId)
    {
        $vehicle = $this->getVehicleById($vehicleId);

        if ($vehicle) {
            return $vehicle->parts;
        }

        return null;
    }

    public function getVehicleIdNames()
    {
        return $this->vehicleRepository->getIdName();
    }
}
