<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\restaurante_controller;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/menu', [restaurante_controller::class, 'getAll']);
Route::get('/menu/{id}', [restaurante_controller::class, 'getMenuById']);
Route::post('/menu/new', [restaurante_controller::class, 'store']);
Route::put('/menu/{id}', [restaurante_controller::class, 'update_api']);
Route::delete('/menu/{id}', [restaurante_controller::class, 'destroy']);