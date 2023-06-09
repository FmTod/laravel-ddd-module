<?php

namespace App\Modules\Part\Infrastructure\Repositories;

use App\Modules\Part\Domain\Models\Part;
use App\Modules\Vehicle\Domain\Models\Vehicle;

class EloquentPartRepository implements PartRepository
{
    public function find($id)
    {
        return Part::find($id);
    }

    public function create(array $data)
    {
        return Part::create($data);
    }

    public function update(Part $part, array $data)
    {
        $part->update($data);

        return $part->refresh();
    }

    public function delete(Part $part)
    {
        return $part->delete();
    }

    public function getAll()
    {
        return Part::with('vehicle')->paginate(10);
    }

    public function getPartsByVehicle($vehicleId)
    {
        $vehicle = Vehicle::find($vehicleId);

        if ($vehicle) {
            return $vehicle->parts;
        }

        return null;
    }
}
