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
use App\Livewire\CreateBar;
use App\Livewire\CreateHall;
use App\Livewire\CreateEvent;
use App\Livewire\CreateHotel;
use App\Livewire\CreateRestaurant;
use App\Livewire\CreateRoom;
use App\Livewire\EventComponent;
use App\Livewire\HotelComponent;
use App\Livewire\Dashboard;
use App\Livewire\AllHotelsComponent;
use App\Livewire\HotelRelations;
use App\Livewire\RoomComponent;
use App\Livewire\AllRoomsComponent;
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
	Route::get('/dashboard/default', [UserController::class, 'dashboard'])->middleware('verified')->name('dashboard.default');
	Route::get('/dashboard', Dashboard::class)->middleware('verified')->name('dashboard');
	Route::post('book/{id}', [BookingController::class, 'store']);
	Route::get('/wizard/{step}',[wizardController::class, 'create'])->name('wizard');
});


Route::middleware(['auth', 'can:create'])->group(function () {
	Route::get('/create-hotel', CreateHotel::class)->name('create-hotel');
	Route::get('/create-room', CreateRoom::class)->name('create-room');
	Route::get('/create-restaurant', CreateRestaurant::class)->name('create-restaurant');
	Route::get('/create-bar', CreateBar::class)->name('create-bar');
	Route::get('/create-event', CreateEvent::class)->name('create-event');
	Route::get('/create-hall', CreateHall::class)->name('create-hall');
});

//Hotel Routes
Route::get('/hotels', AllHotelsComponent::class);
Route::get('/hotel/{tag}', HotelComponent::class);

//Room Routes / Accommodation-service routes
Route::get('/rooms', AllRoomsComponent::class);
Route::get('/room/{id}', RoomComponent::class);


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

//hotel-relations
Route::get('/mombasa-services', HotelRelations::class);
Route::get('/ngulia-services', HotelRelations::class);
Route::get('/voi-services', HotelRelations::class);






require __DIR__.'/auth.php';
