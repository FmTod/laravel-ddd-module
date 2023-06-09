<?php

namespace App\Modules\Vehicle\UI\Console\Commands;

use Illuminate\Console\Command;

class CreateVehicleCommand extends Command
{
    protected $signature = 'vehicle:create {name} {type}';

    protected $description = 'Create a new vehicle';

    public function handle()
    {
        $name = $this->argument('name');
        $type = $this->argument('type');

        // Your implementation logic to create a new vehicle
    }
}
