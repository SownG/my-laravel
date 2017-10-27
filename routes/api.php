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
Route::post('login', 'UserController@getUsers');

Route::group(['namespace' => 'Api' ], function () {
    Route::post('auth/login', 'UserController@login');
    Route::post('auth/signUp', 'UserController@signUp');

    Route::group(['prefix' => 'users'], function() {
        Route::get('', 'UserController@getUsers');
    });

});
