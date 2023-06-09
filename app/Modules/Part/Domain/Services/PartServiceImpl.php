<?php

namespace App\Modules\Part\Domain\Services;

use App\Modules\Part\Domain\Models\Part;
use App\Modules\Part\Infrastructure\Repositories\PartRepository;

class PartServiceImpl implements PartService
{
    protected $partRepository;

    public function __construct(PartRepository $partRepository)
    {
        $this->partRepository = $partRepository;
    }

    public function getAllParts()
    {
        return $this->partRepository->getAll();
    }

    public function createPart(array $data)
    {
        return $this->partRepository->create($data);
    }

    public function updatePart(Part $part, array $data)
    {
        return $this->partRepository->update($part, $data);
    }

    public function deletePart(Part $part)
    {
        return $this->partRepository->delete($part);
    }

    public function getPartsByVehicle($vehicleId)
    {
        // Implement the logic to fetch parts by vehicle using the repository
        // Example:
        return $this->partRepository->getPartsByVehicle($vehicleId);
    }

    public function findPart($id)
    {
        return $this->partRepository->find($id);
    }
}
