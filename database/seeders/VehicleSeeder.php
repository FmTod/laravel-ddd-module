<?php

namespace Database\Seeders;

use App\Modules\Vehicle\Domain\Models\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Vehicle::factory()->count(10)->create();
    }
}
