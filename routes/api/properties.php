<?php


use App\Http\Controllers\PropertiesController;
use Illuminate\Support\Facades\Route;

// Public Property Route
Route::get('properties', [PropertiesController::class, 'index']);
Route::get('properties/{property}', [PropertiesController::class, 'show']);

// Protected Property Routes
Route::apiResource('properties', PropertiesController::class)
    ->only('store', 'update', 'destroy')
    ->middleware('auth:sanctum');
