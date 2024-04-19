<?php

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
Route::get('/exchange', function () {
    return view('homePages.exchanges');
});
Route::get('/cryptoDetails', function () {
    return view('homePages.cryptoDetails');
});
