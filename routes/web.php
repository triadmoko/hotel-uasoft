<?php

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

Route::get('/', function () {
    return view('user.index');
});

Route::get('/hotel-grid', [HotelController::class, 'index']);

// Route::get('/hotel-detail/{hotel}', [HotelController::class, 'show']);

Route::get('/hotel-rooms/{hotel}', [RoomController::class, 'viewRoom']);

Route::get('/user-dashboard', [UserController::class, 'index']);