<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Vehicle\UI\Http\Controllers\VehicleController;

Route::group(['prefix' => 'vehicles'], function () {
    Route::get('/', [VehicleController::class, 'index'])->name('vehicles.index');
    Route::get('/create', [VehicleController::class, 'create'])->name('vehicles.create');
    Route::get('/show/{vehicle}', [VehicleController::class, 'show'])->name('vehicles.show');
    Route::post('/', [VehicleController::class, 'store'])->name('vehicles.store');
    Route::get('/{vehicle}', [VehicleController::class, 'edit'])->name('vehicles.edit');
    Route::put('/{vehicle}', [VehicleController::class, 'update'])->name('vehicles.update');
    Route::delete('/{vehicle}', [VehicleController::class, 'destroy'])->name('vehicles.destroy');
});
