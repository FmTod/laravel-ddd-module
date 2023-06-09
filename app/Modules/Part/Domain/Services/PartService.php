<?php

namespace App\Modules\Part\Domain\Services;

use App\Modules\Part\Domain\Models\Part;

interface PartService
{
    public function findPart($id);

    public function getAllParts();

    public function createPart(array $data);

    public function updatePart(Part $part, array $data);

    public function deletePart(Part $part);

    public function getPartsByVehicle($vehicleId);
}
