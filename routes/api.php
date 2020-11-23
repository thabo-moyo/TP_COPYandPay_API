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

Route::get('/prepareCheckOut', 'App\Http\Controllers\PaymentController@prepareCheckOut');

Route::get('/paymentStatus','App\Http\Controllers\PaymentController@handlePayment');
Route::get('/createHistory', ['uses'=>'App\Http\Controllers\PaymentController@storeData']);
Route::get('/status', 'App\Http\Controllers\PaymentController@handlePayment');
Route::get('/PaymentHistory','App\Http\Controllers\PaymentController@showUserHistory');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

