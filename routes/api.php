<?php

use Illuminate\Http\Request;

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

Route::group(['prefix' => 'v1','middleware' => 'cors'], function() {
    Route::get('country', 'CountryController@getAllCountries');
    Route::get('country/{country}', 'CountryController@getPhoneCode');
   });


Route::fallback(function () {
    //Error page if post method not sent
    return response(['message' => 'Resource not found'], 404);
});
