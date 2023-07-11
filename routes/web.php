<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('register');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('app');
});

Route::get('/shop', function () {
    return view('movieSeat');
});

Route::post('/login/send',[LoginController::class, 'login'] );

Route::post('/register/send',[RegisterController::class, 'register']);
