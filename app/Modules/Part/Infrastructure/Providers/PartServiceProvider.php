<?php

namespace App\Modules\Part\Infrastructure\Providers;

use App\Modules\Part\Infrastructure\Repositories\PartRepository;
use Illuminate\Support\ServiceProvider;
use App\Modules\Part\Infrastructure\Repositories\EloquentPartRepository;
use App\Modules\Part\Domain\Services\PartService;
use App\Modules\Part\Domain\Services\PartServiceImpl;

class PartServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(PartRepository::class, EloquentPartRepository::class);
        $this->app->bind(PartService::class, PartServiceImpl::class);
    }
}
