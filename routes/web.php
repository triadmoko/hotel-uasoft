<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\HotelDetailController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\User;
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

Route::get('/', [UserController::class, 'index'])->name('login')->middleware('guest');

Route::get('/hotel-grid', [HotelController::class, 'index']);
// Route::get('/hotel-detail/{hotel}', [HotelController::class, 'show']);
Route::get('/hotel-rooms/{hotel}', [RoomController::class, 'viewRoom']);
Route::get('/room-details/{room}', [RoomController::class, 'show']);
Route::get('/user-dashboard', [Dashboard::class, 'index'])->middleware('auth');
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);
