<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\userloginController;
use App\Http\Controllers\AccommodationController;
use App\Http\Controllers\MpesaController;
use App\Http\Controllers\wizardController;
use Illuminate\Http\Request;
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
	Route::get('/accommodation/{id}', [AccommodationController::class, 'show'])->name('accommodation.show');
	Route::get('/create',function(){
		return view('accommodations.create');
	})->name('accommodation.create');
	Route::post('/accommodations/store',[AccommodationController::class, 'store'])->name('accommodation.store');
	Route::post('book/{id}', [BookingController::class, 'store']);
	Route::get('/wizard/{step}',[wizardController::class, 'create'])->name('wizard');
});

Route::get('/test', function(Request $request){
	dd($request->session()->all());
});
Route::get('/package/{id}', Counter::class);
Route::post('/counter', Counter::class);



require __DIR__.'/auth.php';
