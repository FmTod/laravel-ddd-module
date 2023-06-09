<?php

namespace App\Modules\Vehicle\UI\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Vehicle\Domain\Events\VehicleCreated;
use App\Modules\Vehicle\Domain\Events\VehicleDeleted;
use App\Modules\Vehicle\Domain\Models\Vehicle;
use App\Modules\Vehicle\Domain\Services\VehicleService;
use App\Modules\Vehicle\UI\Http\Requests\CreateVehicleRequest;
use App\Modules\Vehicle\UI\Http\Requests\UpdateVehicleRequest;

class VehicleController extends Controller
{
    private $vehicleService;

    public function __construct(VehicleService $vehicleService)
    {
        $this->vehicleService = $vehicleService;
    }

    public function index()
    {
        $vehicles = $this->vehicleService->getAllVehicles();

        return view('vehicles.index', compact('vehicles'));
    }

    public function create()
    {
        return view('vehicles.create');
    }

    public function store(CreateVehicleRequest $request)
    {
        $vehicle = $this->vehicleService->createVehicle($request->validated());

        event(new VehicleCreated($vehicle));

        return redirect()->route('vehicles.index', $vehicle);
    }

    public function show(Vehicle $vehicle)
    {
        return view('vehicles.show', compact('vehicle'));
    }

    public function edit(Vehicle $vehicle)
    {
        return view('vehicles.edit', compact('vehicle'));
    }

    public function update(UpdateVehicleRequest $request, Vehicle $vehicle)
    {
        $vehicle = $this->vehicleService->updateVehicle($vehicle, $request->validated());

        return redirect()->route('vehicles.index', $vehicle);
    }

    public function destroy(Vehicle $vehicle)
    {
        $this->vehicleService->deleteVehicle($vehicle);
        event(new VehicleDeleted($vehicle));
        return redirect()->route('vehicles.index');
    }
}
