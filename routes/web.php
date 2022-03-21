<?php

use App\Http\Controllers\BookingController;
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

// Route::get('/', function () {
//     return view('front/index');
// });
// Route::get('/booked', function () {
//     return view('front/booked');
// });
// Route::get('/booking', function () {
//     return view('front/booking');
// });

Route::middleware(['auth'])->group(function(){
    Route::get('/',[BookingController::class,'index']);
    Route::get('/booked',[BookingController::class,'booked']);
    Route::get('/booking',[BookingController::class,'booking']);
    Route::get('/getRoom',[BookingController::class,'getRoom']);
    Route::post('/roomBooing',[BookingController::class,'roomBooing']);
    Route::get('/search_room',[BookingController::class,'search_room']);
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
