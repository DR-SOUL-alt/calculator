<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BmiController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('bmi', [App\Http\Controllers\BmiController::class, 'index'])->name('bmi.index');
Route::post('/bmi/calculate', [BmiController::class, 'calculate'])->name('bmi.calculate');
// Owner routes
Route::get('/owners', [App\Http\Controllers\OwnerController::class, 'index'])->name('owners.index');
Route::get('/owners/create', [App\Http\Controllers\OwnerController::class, 'create'])->name('owners.create');
Route::post('/owners', [App\Http\Controllers\OwnerController::class, 'store'])->name('owners.store');
Route::get('/owners/{owner}/edit', [App\Http\Controllers\OwnerController::class, 'edit'])->name('owners.edit');
Route::put('/owners/{owner}', [App\Http\Controllers\OwnerController::class, 'update'])->name('owners.update');
Route::delete('/owners/{owner}', [App\Http\Controllers\OwnerController::class, 'destroy'])->name('owners.destroy');
// Cars Routes
Route::get('/cars', [App\Http\Controllers\CarController::class, 'index'])->name('cars.index');
Route::get('/cars/create', [App\Http\Controllers\CarController::class, 'create'])->name('cars.create');
Route::post('/cars', [App\Http\Controllers\CarController::class, 'store'])->name('cars.store');
Route::get('/cars/{car}/edit', [App\Http\Controllers\CarController::class, 'edit'])->name('cars.edit');
Route::put('/cars/{car}', [App\Http\Controllers\CarController::class, 'update'])->name('cars.update');
Route::delete('/cars/{car}', [App\Http\Controllers\CarController::class, 'destroy'])->name('cars.destroy');
