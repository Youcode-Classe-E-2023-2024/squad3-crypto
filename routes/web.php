<?php

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

Route::get('/exchange', function () {
    return view('homePages.exchanges');
});

