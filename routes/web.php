<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardHotelController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
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
    return view('user.index');
})->name('login');

Route::get('/hotel-grid', [HotelController::class, 'index']);
// Route::get('/hotel-detail/{hotel}', [HotelController::class, 'show']);
Route::get('/hotel-rooms/{hotel}', [RoomController::class, 'viewRoom']);
Route::get('/room-details/{room}', [RoomController::class, 'show']);
Route::get('/user-dashboard', function () {
    return view('user.user-dashboard');
})->middleware('auth');
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);


Route::post('/booking', [UserController::class, 'booking'])->middleware('auth');
Route::resource('/user-dashboard/book', BookController::class)->middleware('auth');
Route::resource('/user-dashboard/hotel', DashboardHotelController::class)->middleware('auth');
