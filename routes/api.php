<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// --------------------------------------------------------------------------
//  STUDENTS e.g. http://localhost:8000/api/hello
// --------------------------------------------------------------------------
Route::get('/hello', function () {
    return 'Hello World';
});

// --------------------------------------------------------------------------
//  STUDENTS e.g. http://localhost:8000/api/students/100
// --------------------------------------------------------------------------
Route::get('students', 'App\Http\Controllers\ApiController@getAllStudents');
Route::get('students/{id}', 'App\Http\Controllers\ApiController@getStudent');
Route::post('students', 'App\Http\Controllers\ApiController@createStudent');
Route::put('students/{id}', 'App\Http\Controllers\ApiController@updateStudent');
Route::delete('students/{id}','App\Http\Controllers\ApiController@deleteStudent');

// --------------------------------------------------------------------------
//  SHIPPING RESULTS
// --------------------------------------------------------------------------
Route::get('emfg/sa/students/{filter}', 'App\Http\Controllers\ApiShippingResultController@search');
Route::get('emfg/sa/student/{id}', 'App\Http\Controllers\ApiShippingResultController@get');

