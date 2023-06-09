<?php

namespace App\Modules\Part\Infrastructure\Repositories;

use App\Modules\Part\Domain\Models\Part;

interface PartRepository
{
    public function getAll();

    public function find($id);

    public function create(array $data);

    public function update(Part $part, array $data);

    public function delete(Part $part);

    public function getPartsByVehicle($vehicleId);
}
