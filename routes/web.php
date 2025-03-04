<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CarsController;


Route::get('/hello', [Controller::class, 'index']);
Route::get('/perkalian/{angka}', [Controller::class, 'perkalian']);
Route::get('/tambah', [Controller::class, 'tambah']);
Route::get('/insert-car', [CarsController::class, 'insertCar']);
Route::get('/get-car', [CarsController::class, 'getCar']);
Route::get('/insert-data', [CarsController::class, 'insertData']);
Route::get('/get-cars', [CarsController::class, 'getCarWithManufacture']);
