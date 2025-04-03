<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\userloginController;
use App\Http\Controllers\AccommodationController;
use App\Http\Controllers\MpesaController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', [UserController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/home', function () {
	return view('home');
})->name('home');
Route::get('/register', function () {
	return view('home');
});
Route::get('/login', function () {
	return view('auth.login');
});
Route::post('/login',[userloginController::class, 'create']);

Route::get('/accommodation/{id}',[AccommodationController::class, 'show']);

Route::get('/accommodations', function () {
	return view('accommodations.show');
})->middleware('auth');

Route::get('/accommodations/create', function () {
	return view('accommodations.create');
})->middleware('auth');

Route::post('/accommodations/store',[AccommodationController::class, 'store'])->middleware('auth')->name('accommodation.store');

Route::post('book/{id}', [BookingController::class, 'store'])->middleware('auth');

require __DIR__.'/auth.php';
