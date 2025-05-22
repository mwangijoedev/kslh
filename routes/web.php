<?php

use App\Http\Controllers\RoomController;
use App\Http\Controllers\BarController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\wizardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HallController;
use App\Livewire\AllBarsComponent;
use App\Livewire\AllEventsComponent;
use App\Livewire\AllHallsComponent;
use App\Livewire\AllRestaurantsComponent;
use App\Livewire\BarComponent;
use App\Livewire\EventComponent;
use App\Livewire\RestaurantComponent;

use App\Livewire\HallComponent;
use Illuminate\Support\Facades\Route;

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

	//Bar creation Routes
	Route::get('/bar/create', [BarController::class, 'create'])->middleware('can:create')->name('bar.create');
	Route::post('/bar/store', [BarController::class, 'store'])->middleware('can:create')->name('bar.store');
	Route::get('/bar/edit/{id}', [BarController::class, 'edit'])->middleware('can:create')->name('bar.edit');

	//Event creation Routes
	Route::get('/event/create', [EventController::class, 'create'])->middleware('can:create')->name('event.create');
	Route::post('/event/store', [EventController::class, 'store'])->middleware('can:create')->name('event.store');
	Route::get('/event/edit/{id}', [EventController::class, 'edit'])->middleware('can:create')->name('event.edit');

	//Hall creation Routes
	Route::get('/hall/create', [HallController::class, 'create'])->middleware('can:create')->name('hall.create');
	Route::post('/hall/store', [HallController::class, 'store'])->middleware('can:create')->name('hall.store');
	Route::get('/hall/edit/{id}', [HallController::class, 'edit'])->middleware('can:create')->name('hall.edit');


});

//Hotel Routes
Route::get('/hotel/all', [HotelController::class, 'index']);
Route::get('/hotel/show/{tag}', [HotelController::class, 'show']);

//Room Routes / Accommodation-service routes
Route::get('/room/all', [RoomController::class, 'index']);


//Restaurant Routes / Dining-service routes
Route::get('/restaurants', AllRestaurantsComponent::class);
Route::get('/restaurant/{id}', RestaurantComponent::class);

//Bar Routes / Bar-service routes
Route::get('/bars', AllBarsComponent::class);
Route::get('/bar/{id}', BarComponent::class);


//Event Routes / Event-service routes
Route::get('/events', AllEventsComponent::class);
Route::get('/event/{id}', EventComponent::class);

//Hall Routes / Conferencing-service routes
Route::get('/halls', AllHallsComponent::class);
Route::get('/hall/{id}', HallComponent::class);






require __DIR__.'/auth.php';
