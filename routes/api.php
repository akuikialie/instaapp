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

Route::group(['prefix' => 'authentication'], function () {
    Route::post('/login', 'Api\Authentication\Login\ShowController@index');
    Route::post('/logout', 'Api\Authentication\Logout\DestroyController@destroy');
});

Route::group(['prefix' => 'account'], function () {
    Route::get('/profile', 'Api\Account\Profile\ShowController@index');
    Route::put('/profile', 'Api\Account\Profile\UpdateController@index');
});

Route::group(['prefix' => 'feeds'], function () {
    Route::get('/', 'Api\Feed\AllController@index');
    Route::post('/', 'Api\Feed\CreateController@index');
});