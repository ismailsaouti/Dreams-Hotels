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
Route::get('/save', [App\Http\Controllers\ReservationController::class, 'save'])->name('save');
Route::get('/reservation', [App\Http\Controllers\ReservationController::class, 'reservation'])->name('reservation'); 
Route::get('/hotel-post', [App\Http\Controllers\HotelController::class, 'hotelsPosts'])->name('hotels_posts');
Route::get('/hotels', [App\Http\Controllers\HotelController::class, 'hotels'])->name('hotels');
Route::get('/chambres', function () {
    return view('chambres');
});
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
