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

Route::get('/', [App\Http\Controllers\HotelController::class, 'index'])->name('index');
Route::get('/resever-hotel', [App\Http\Controllers\ReservationController::class, 'reserver'])->name('reserver')->middleware('verified');
Route::get('/save', [App\Http\Controllers\ReservationController::class, 'save'])->name('save');
Route::get('/reservation', [App\Http\Controllers\ReservationController::class, 'reservation'])->name('reservation'); 
Route::get('/hotels', [App\Http\Controllers\HotelController::class, 'hotels'])->name('hotels');

Route::get('/mes-réservations', [App\Http\Controllers\ReservationController::class, 'userReservation'])->name('consulter'); 


Route::get('/chambres', function () {
    return view('chambres');
})->name('chambres');
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::get('/login', function () {
    
    return view('auth.login');
    
})->name('login');
Auth::routes(['verify'=>true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');




