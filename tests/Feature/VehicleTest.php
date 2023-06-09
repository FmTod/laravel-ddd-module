<?php

namespace Tests\Feature;

use App\Modules\Vehicle\Domain\Models\Vehicle;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VehicleTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_list_vehicles()
    {
        Vehicle::factory()->count(3)->create();

        $response = $this->get('/vehicles');

        $response->assertStatus(200)
            ->assertJsonCount(3, 'data');
    }

    public function sortId(): string
    {
        return Vehicle::orderBy('id');
    }

    public function provides(): array
    {
        $vehicle = new Vehicle();

        // Return an array of attributes provided by the Vehicle model
        return $vehicle->getAttributes();
    }

    public function requires(): array
    {
        $vehicle = new Vehicle();

        // Return an array of attributes required by the Vehicle model
        return $vehicle->getFillable();
    }

    public function run()
    {
        $vehicle = new Vehicle();
    }
}
