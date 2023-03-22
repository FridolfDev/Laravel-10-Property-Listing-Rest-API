<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrokersController;
use Illuminate\Support\Facades\Route;

// Public Broker Routes
Route::get('/brokers', [BrokersController::class, 'index']);
Route::get('/brokers/{broker}', [BrokersController::class, 'show']);

// Protected Broker Routes
Route::middleware('auth:sanctum')
    ->group(function () {
        Route::apiResource('/brokers', BrokersController::class)
            ->only(['store', 'update', 'destroy']);
    });


