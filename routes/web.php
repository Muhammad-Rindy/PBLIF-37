<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Redirect;

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
    return Redirect::route('login');
});

Auth::routes();

Route::get('/dashboard', [LecturerController::class, 'dashboard'])->name('index_dashboard');
Route::get('/lecturers', [LecturerController::class, 'index_lecturer'])->name('index_lecturer');
Route::get('/rooms', [RoomController::class, 'index_room'])->name('index_room');
Route::post('/rfid/store', [LecturerController::class, 'store_rfid'])->name('store-rfid');

Route::middleware(['admin'])->group(function() {
    // Lecturer
    Route::get('/lecturer/create', [LecturerController::class, 'create_lecturer'])->name('create_lecturer');
    Route::post('/lecturer/create', [LecturerController::class, 'store_lecturer'])->name('store_lecturer');
    Route::get('/lecturer/{lecturer}/edit', [LecturerController::class, 'edit_lecturer'])->name('edit_lecturer');
    Route::patch('/lecturer/{lecturer}/update', [LecturerController::class, 'update_lecturer'])->name('update_lecturer');
    Route::delete('/lecturer/{lecturer}', [LecturerController::class, 'destroy_lecturer'])->name('delete_lecturer');
    // Rooms
    Route::get('/room/create', [RoomController::class, 'create_room'])->name('create_room');
    Route::post('/room/create', [RoomController::class, 'store_room'])->name('store_room');
    Route::get('/room/{room}/edit', [RoomController::class, 'edit_room'])->name('edit_room');
    Route::patch('/room/{room}/update', [RoomController::class, 'update_room'])->name('update_room');
    Route::delete('/room/{room}', [RoomController::class, 'destroy_room'])->name('delete_room');
});

Route::middleware(['auth'])->group(function() {
    Route::get('/profile', [ProfileController::class, 'show_profile'])->name('show_profile');
    Route::post('/profile', [ProfileController::class, 'edit_profile'])->name('edit_profile');
});