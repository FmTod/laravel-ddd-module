<?php

namespace Database\Seeders;

use App\Modules\Part\Domain\Models\Part;
use App\Modules\Vehicle\Domain\Models\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $vehicles = Vehicle::all();

        foreach ($vehicles as $vehicle) {
            Part::factory()->count(3)->create([
                'vehicle_id' => $vehicle->id,
            ]);
        }
    }
}
