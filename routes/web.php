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
Route::get('/cars/{car_id}/reviews', [CarsController::class, 'showReviews'])->name('showReviews');
Route::post('/cars/{car_id}/reviews', [CarsController::class, 'insertReview'])->name('insertReview');
Route::get('/cars', [CarsController::class, 'index'])->name('cars.index');
Route::post('/cars/add-features', [CarsController::class, 'addFeatures'])->name('cars.addFeatures');
Route::post('/features/store', [CarsController::class, 'store'])->name('features.store');
