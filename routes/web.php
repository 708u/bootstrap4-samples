<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Bootstrap pages.
Route::name('bootstrap.')->prefix('bootstrap')->group(function () {
    Route::name('complete-website-layout.')->prefix('complete-website-layout')->group(function () {
        Route::view('/home', 'bootstrap.complete-website-layout.home')->name('home');
    });

    // Components samples.
    Route::name('components.')->prefix('components')->group(function () {
        Route::view('/alert', 'bootstrap.components.alert')->name('alert');
        Route::view('/badge', 'bootstrap.components.badge')->name('badge');
    });
});
