<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MpesaController;

// Define your API routes here

Route::post('/mpesa/stkpush', [MpesaController::class, 'initiateStkPush']);

