<?php

use App\Http\Controllers\restaurante_controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|Route::get('/', function () {

$top = DB::table('restaurante')->latest()->take(3)->get();

return view('/',['restaurante' => $top]);
})->name('inicio');

 */

 /* Se definen las rutas  y en caso necesario se cargan los datos para su futura visualizacion */
Route::get('/', function () {
    $top = DB::table('restaurante')->oldest()->take(3)->get();
    return view('welcome', ['restaurante' => $top]);
    })->name('inicio');

Route::get('/menu', function () {
    $lista = DB::table('restaurante')->get();
    return view('menu', ['restaurante' => $lista]);
})->name('menu');
Route::get('/crear', function () {return view('crear');})->name('crear');

/* rutas que realizan cambios en la db */
Route::post('/saveItemRoute', [restaurante_controller::class, 'saveItem'])->name('saveItem');
Route::get('/eliminar/{id}', [restaurante_controller::class, 'eliminar'])->name('eliminar');

Route::get('/editar/{id}', [restaurante_controller::class, 'editar'])->name('editar');

Route::post('/update/{id}', [restaurante_controller::class, 'update'])->name('update');
