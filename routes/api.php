<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiscoController;


Route::get('/api_laravel_teste', [DiscoController::class, 'index']);
Route::post('/api_laravel_teste', [DiscoController::class, 'store']);
Route::get('/api_laravel_teste/{id}', [DiscoController::class, 'show']);
Route::put('/api_laravel_teste/{id}', [DiscoController::class, 'update']);
Route::delete('/api_laravel_teste/{id}', [DiscoController::class, 'destroy']);

