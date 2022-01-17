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
// LINK URL WITH CONTROLLER
// ---------------------------------------------------------------------
Route::resource('errors', ErrorController::class);
Route::resource('events', EventController::class);




