<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\TourDatesController;
use App\Http\Controllers\LocalizationController;
=======

>>>>>>> 2bf285d (First Commit)
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
<<<<<<< HEAD
=======

>>>>>>> 2bf285d (First Commit)
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
<<<<<<< HEAD

Route::get('/book/view', [TourDatesController::class, 'view']);
Route::post('/booking/store', [\App\Http\Controllers\BookingController::class, 'store']);
=======
>>>>>>> 2bf285d (First Commit)
