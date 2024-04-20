<?php

use App\Http\Controllers\ExchangeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CryptoController;

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


Route::get('/crypto', [CryptoController::class, 'index']);

Route::post('/cryptoDetails', [CryptoController::class, 'crypto_details'])->name('crypto_details');

// Exchanges Index
Route::get('/exchange', [ExchangeController::class, 'index']);

// Exchange api
Route::get('/exchange/{slug}', [ExchangeController::class, 'show']);

// Returning Exchange view
Route::get('/exchangeDetails', [ExchangeController::class, 'exchangeDetails']);
