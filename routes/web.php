<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

Route::get('/', [PersonController::class, 'index']);
Route::get('/add', [PersonController::class, 'add']);
Route::post('/add', [PersonController::class, 'create']);
Route::get('/edit', [PersonController::class, 'edit']);
Route::post('/edit', [PersonController::class, 'update']);
Route::get('/delete', [PersonController::class, 'delete']);
Route::post('/delete', [PersonController::class, 'remove']);
Route::get('/show', [PersonController::class, 'show']);
