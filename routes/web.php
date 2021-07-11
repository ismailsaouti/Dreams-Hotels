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

//admin routes

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/gestion-hotels', [App\Http\Controllers\AdminController::class, 'hotels'])->name('g_hotels');
Route::get('/gestion-chambres', [App\Http\Controllers\AdminController::class, 'chambres'])->name('g_chambres');
Route::get('/gestion-utilisateurs', [App\Http\Controllers\AdminController::class, 'utilisateurs'])->name('g_utilisateurs');
//
Route::get('/create-reservation', [App\Http\Controllers\AdminController::class, 'createReservation'])->name('c_reservations');
Route::get('/create-hotel', [App\Http\Controllers\AdminController::class, 'createHotel'])->name('c_hotels');
Route::get('/create-chambre', [App\Http\Controllers\AdminController::class, 'createChambre'])->name('c_chambres');
Route::get('/create-utilisateur', [App\Http\Controllers\AdminController::class, 'createUtilisateur'])->name('c_utilisateurs');
Route::post('/save-hotel', [App\Http\Controllers\AdminController::class, 'saveHotel'])->name('save_hotel');
Route::post('/save-chambre', [App\Http\Controllers\AdminController::class, 'saveChambre'])->name('save_chambre');
Route::get('/delete-hotel/{hotel_id}', [App\Http\Controllers\AdminController::class, 'deleteHotel'])->name('delete_hotel');

//index route
Route::get('/', [App\Http\Controllers\HotelController::class, 'index'])->name('index');
//reservation routes
Route::get('/resever-hotel', [App\Http\Controllers\ReservationController::class, 'reserver'])->name('reserver')->middleware('verified');
Route::get('/save', [App\Http\Controllers\ReservationController::class, 'save'])->name('save');
Route::get('/reservation', [App\Http\Controllers\ReservationController::class, 'reservation'])->name('reservation'); 
Route::get('/hotels', [App\Http\Controllers\HotelController::class, 'hotels'])->name('hotels');

Route::get('/mes-réservations', [App\Http\Controllers\ReservationController::class, 'userReservation'])->name('consulter'); 


//reservation of a client
Route::get('/my-reservations', [App\Http\Controllers\ReservationController::class, 'userReservation'])->name('user_reservations');

Route::get('/chambres', function () {
    return view('chambres');
})->name('chambres');
Auth::routes(['verify'=>true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

//test
Route::get('/test', [App\Http\Controllers\AdminController::class, 'test']);

