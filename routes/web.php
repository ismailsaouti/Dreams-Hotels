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
    return view('index');
});
Route::get('/hotels', function () {
    return view('hotels');
});
Route::get('/chambres', function () {
    return view('chambres');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/offres', function () {
    return view('offres');
});

Route::get('register',function(){
    return view('auth.register');
});
