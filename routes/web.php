<?php

use Illuminate\Support\Facades\Route;

// ---------------------------------------------------------------------
// IMPORT CONTROLLER
// ---------------------------------------------------------------------
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\EventController;


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
// LINK URL WITH CONTROLLER (ALL FUNCTIONS) ** MUST LINK WITH CONTROLER **
// ---------------------------------------------------------------------
Route::resource('errors', ErrorController::class);
Route::resource('events', EventController::class);

// ---------------------------------------------------------------------
// NAME = SHORT ROOT CALLED FROM VIEW [ FROM MAIN MENU ]
// ---------------------------------------------------------------------
Route::prefix('errors')->group(function () {
    Route::get('/index', 'App\Http\Controllers\ErrorController@index')->name('errors');
    // Route::get('/delete/{id}', 'App\Http\Controllers\ErrorController@delete')->name('error.delete');
    // Route::get('/create', 'App\Http\Controllers\ErrorController@create')->name('error.create');
});

// ---------------------------------------------------------------------
// NAME = SHORT ROOT CALLED FROM VIEW [ FROM MAIN MENU ]
// ---------------------------------------------------------------------
Route::prefix('events')->group(function () {
    Route::get('/index', 'App\Http\Controllers\EventController@index')->name('events');
    // Route::get('/delete/{id}', 'App\Http\Controllers\EventController@delete')->name('event.delete');
    // Route::get('/create', 'App\Http\Controllers\EventController@create')->name('event.create');
});


