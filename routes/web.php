<?php

use App\Http\Controllers\ExchangeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/market', function () {
    return view('homePages.market');
});
Route::get('/crypto', function () {
    return view('homePages.assets');
});

// Exchanges Index
Route::get('/exchange', [ExchangeController::class, 'index']);

// Exchange Detail
Route::get('/exchange/{slug}', [ExchangeController::class, 'show']);

Route::get('/cryptoDetails', function () {
    return view('homePages.cryptoDetails');
});
