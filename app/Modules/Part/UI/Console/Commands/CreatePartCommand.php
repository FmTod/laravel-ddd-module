<?php

namespace App\Modules\Part\UI\Console\Commands;

use Illuminate\Console\Command;
use App\Modules\Part\Domain\Services\PartService;

class CreatePartCommand extends Command
{
    protected $signature = 'part:create {name : The name of the part} {price : The price of the part} {vehicle_id : The ID of the associated vehicle}';
    protected $description = 'Create a new part';

    protected $partService;

    public function __construct(PartService $partService)
    {
        parent::__construct();
        $this->partService = $partService;
    }

    public function handle()
    {
        $name = $this->argument('name');
        $price = $this->argument('price');
        $vehicleId = $this->argument('vehicle_id');

        $part = $this->partService->createPart([
            'name' => $name,
            'price' => $price,
            'vehicle_id' => $vehicleId,
        ]);

        $this->info('Part created successfully.');
        $this->table(['ID', 'Name', 'Price', 'Vehicle ID'], [[
            'ID' => $part->id,
            'Name' => $part->name,
            'Price' => $part->price,
            'Vehicle ID' => $part->vehicle_id,
        ]]);
    }
}
