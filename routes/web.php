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


// ---------------------------------------------------------------------
// ROUTE SHIPPING
// ---------------------------------------------------------------------
Route::get('/shipping', function () {return view('shipping');})->name('shipping');

// ---------------------------------------------------------------------
// ROUTE ERROR LOG
// ---------------------------------------------------------------------
Route::prefix('error')->group(function () {
    Route::get('/index', 'App\Http\Controllers\ShippingController@index')->name('error');
    // Route::get('/delete/{id}', 'App\Http\Controllers\ShippingController@delete')->name('error.delete');
    // Route::get('/create', 'App\Http\Controllers\ShippingController@create')->name('error.create');
});

Route::get('/errors/index', function () {
    return view('/errors/index');
})->name('error');
