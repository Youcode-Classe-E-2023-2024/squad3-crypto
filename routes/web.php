<?php

use App\Http\Controllers\ExchangeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CryptoController;
use App\Http\Controllers\MarketController;

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

Route::get('/market',[MarketController::class, 'index']);

Route::get('/crypto', [CryptoController::class, 'index']);

Route::post('/cryptoDetails', [CryptoController::class, 'crypto_details'])->name('crypto_details');

Route::get('/exchange', [ExchangeController::class, 'index']);

Route::get('/exchangeDetails', [ExchangeController::class, 'exchangeDetails']);

