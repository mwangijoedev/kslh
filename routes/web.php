<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\userloginController;
use App\Http\Controllers\AccommodationController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

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

require __DIR__.'/auth.php';
