<?php

namespace App\Modules\Vehicle\Infrastructure\Providers;

use App\Modules\Vehicle\Infrastructure\Repositories\VehicleRepository;
use Illuminate\Support\ServiceProvider;
use App\Modules\Vehicle\Infrastructure\Repositories\EloquentVehicleRepository;
use App\Modules\Vehicle\Domain\Services\VehicleService;
use App\Modules\Vehicle\Domain\Services\VehicleServiceImpl;

class VehicleServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(VehicleRepository::class, EloquentVehicleRepository::class);
        $this->app->bind(VehicleService::class, VehicleServiceImpl::class);
    }
}
