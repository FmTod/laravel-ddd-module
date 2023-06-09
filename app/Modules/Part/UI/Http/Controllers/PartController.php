<?php

namespace App\Modules\Part\UI\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Part\Domain\Events\PartCreated;
use App\Modules\Part\Domain\Events\PartDeleted;
use App\Modules\Part\Domain\Models\Part;
use App\Modules\Part\Domain\Services\PartService;
use App\Modules\Part\UI\Http\Requests\CreatePartRequest;
use App\Modules\Part\UI\Http\Requests\UpdatePartRequest;
use App\Modules\Part\UI\Http\Resources\PartResource;
use App\Modules\Vehicle\Domain\Models\Vehicle;
use App\Modules\Vehicle\Domain\Services\VehicleService;
use http\Env\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PartController extends Controller
{
    private $partService;
    private $vehicleService;

    public function __construct(PartService $partService, VehicleService $vehicleService)
    {
        $this->partService = $partService;
        $this->vehicleService = $vehicleService;
    }

    public function index()
    {
        $parts = $this->partService->getAllParts();

        return view('parts.index', compact('parts'));
    }

    public function create()
    {
        $vehicles = $this->vehicleService->getVehicleIdNames();
        return view('parts.create', compact('vehicles'));
    }

    public function store(CreatePartRequest $request)
    {
        $part = $this->partService->createPart($request->all());
        event(new PartCreated($part));
        return redirect()->route('parts.index', $part);
    }

    public function show(Part $part)
    {
        return view('parts.show', compact('part'));
    }

    public function edit(Part $part)
    {
        $vehicles = $this->vehicleService->getVehicleIdNames();
        return view('parts.edit', compact('part', 'vehicles'));
    }

    public function update(UpdatePartRequest $request, Part $part)
    {
        $part = $this->partService->updatePart($part, $request->all());

        return redirect()->route('parts.index', $part);
    }

    public function destroy(Part $part)
    {
        $this->partService->deletePart($part);
        event(new PartDeleted($part));
        return redirect()->route('parts.index');
    }
}
