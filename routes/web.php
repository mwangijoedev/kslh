<?php

use App\Http\Controllers\RoomController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\wizardController;
use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', function () {
	return view('auth.login');
})->name('login');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
	Route::get('/dashboard', [UserController::class, 'dashboard'])->middleware('verified')->name('dashboard');
	Route::post('book/{id}', [BookingController::class, 'store']);
	Route::get('/wizard/{step}',[wizardController::class, 'create'])->name('wizard');
	//Hotel creation Routes
	Route::get('/hotel/create', [HotelController::class, 'create'])->middleware('can:create')->name('hotel.create');
	Route::post('/hotel/store', [HotelController::class, 'store'])->middleware('can:create')->name('hotel.store');
	Route::get('/hotel/edit/{id}', [HotelController::class, 'edit'])->middleware('can:create')->name('hotel.edit');

	//Room creation Routes (formerly accommodation)
	Route::get('/room/create', [RoomController::class, 'create'])->middleware('can:create')->name('room.create');
	Route::post('/room/store', [RoomController::class, 'store'])->middleware('can:create')->name('room.store');
	Route::get('/room/edit/{id}', [RoomController::class, 'edit'])->middleware('can:create')->name('room.edit');

	//Restaurant creation Routes
	Route::get('/restaurant/create', [RestaurantController::class, 'create'])->middleware('can:create')->name('restaurant.create');
	Route::post('/restaurant/store', [RestaurantController::class, 'store'])->middleware('can:create')->name('restaurant.store');
	Route::get('/restaurant/edit/{id}', [RestaurantController::class, 'edit'])->middleware('can:create')->name('restaurant.edit');

});

//Hotel Routes
Route::get('/hotel/all', [HotelController::class, 'index']);
Route::get('/hotel/show/{tag}', [HotelController::class, 'show']);

//Room Routes / Accommodation-service routes
Route::get('/room/all', [HotelController::class, 'index']);
Route::get('/room/show/{tag}', [HotelController::class, 'show']);

//Restaurant Routes / Dining-service routes
Route::get('/restaurant/all', [HotelController::class, 'index']);
Route::get('/restaurant/show/{tag}', [HotelController::class, 'show']);

Route::get('/package/{id}', Counter::class);
Route::post('/counter', Counter::class);



require __DIR__.'/auth.php';
