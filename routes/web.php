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
// Lecturers Routes
Route::get('/lecturers', [App\Http\Controllers\LecturerController::class, 'index'])->name('lecturers.index');
Route::get('/lecturers/create', [App\Http\Controllers\LecturerController::class, 'create'])->name('lecturers.create');
Route::post('/lecturers', [App\Http\Controllers\LecturerController::class, 'store'])->name('lecturers.store');
Route::get('/lecturers/{lecturer}/edit', [App\Http\Controllers\LecturerController::class, 'edit'])->name('lecturers.edit');
Route::put('/lecturers/{lecturer}', [App\Http\Controllers\LecturerController::class, 'update'])->name('lecturers.update');
Route::delete('/lecturers/{lecturer}', [App\Http\Controllers\LecturerController::class, 'destroy'])->name('lecturers.destroy');

// Cars Routes
Route::get('/cars', [App\Http\Controllers\CarController::class, 'index'])->name('cars.index');
Route::get('/cars/create', [App\Http\Controllers\CarController::class, 'create'])->name('cars.create');
Route::post('/cars', [App\Http\Controllers\CarController::class, 'store'])->name('cars.store');
Route::get('/cars/{car}/edit', [App\Http\Controllers\CarController::class, 'edit'])->name('cars.edit');
Route::put('/cars/{car}', [App\Http\Controllers\CarController::class, 'update'])->name('cars.update');
Route::delete('/cars/{car}', [App\Http\Controllers\CarController::class, 'destroy'])->name('cars.destroy');
