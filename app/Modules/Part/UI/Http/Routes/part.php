<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Part\UI\Http\Controllers\PartController;

Route::prefix('parts')->group(function () {
    Route::get('/', [PartController::class, 'index'])->name('parts.index');
    Route::get('/create', [PartController::class, 'create'])->name('parts.create');
    Route::get('/{part}', [PartController::class, 'edit'])->name('parts.edit');
    Route::get('/show/{part}', [PartController::class, 'show'])->name('parts.show');
    Route::post('/', [PartController::class, 'store'])->name('parts.store');
    Route::put('/{part}', [PartController::class, 'update'])->name('parts.update');
    Route::delete('/{part}', [PartController::class, 'destroy'])->name('parts.destroy');
});
