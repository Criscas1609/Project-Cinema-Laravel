<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\TicketController;
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

Route::get('/home', function () {
    return view('info');
});

Route::get('/change', function () {
    return view('password');
});

Route::post('/login/send',[LoginController::class, 'login'] );

Route::post('/register/send',[RegisterController::class, 'register']);

Route::get('/movie/show',[MovieController::class, 'getMovie']);

Route::post('/reservation/save',[TicketController::class, 'createTicket']);

Route::post('/reservation/cancel',[TicketController::class, 'deleteProcess']);

Route::post('/reservation/complete', [TicketController::class, 'saveReservation']);

Route::post('/return',[MovieController::class, 'home']);

Route::post('/update/user',[RegisterController::class, 'updateUser']);

Route::get('/change',[RegisterController::class, 'getUser']);

//route::