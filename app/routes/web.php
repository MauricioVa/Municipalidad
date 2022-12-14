<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('clientes', App\Http\Controllers\ClienteController::class)->middleware('auth');
Route::resource('recetas', App\Http\Controllers\RecetaController::class)->middleware('auth');
Route::resource('farmacos', App\Http\Controllers\FarmacoController::class)->middleware('auth');
Route::resource('farmacias', App\Http\Controllers\FarmaciaController::class)->middleware('auth');
Route::resource('procedencias', App\Http\Controllers\ProcedenciaController::class)->middleware('auth');
Route::resource('items', App\Http\Controllers\ItemController::class)->middleware('auth');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
