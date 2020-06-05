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

Route::get('auth/google/url', 'Api\Auth\GoogleController@loginUrl');
Route::get('auth/google/callback', 'Api\Auth\GoogleController@loginCallback');
