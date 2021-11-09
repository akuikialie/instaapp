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
    Route::post('/login', 'Api\Authentication\Login\ShowController@index')->name('authentication.login');
    Route::post('/logout', 'Api\Authentication\Logout\DestroyController@destroy')->name('authentication.logout');
});

Route::group(['prefix' => 'account'], function () {
    Route::get('/profile', 'Api\Account\Profile\ShowController@index')->name('account.profile');
    Route::put('/profile', 'Api\Account\Profile\UpdateController@index')->name('account.profile.update');
});

Route::group(['prefix' => 'feeds'], function () {
    Route::get('/', 'Api\Feed\AllController@index')->name('feed.index');
    Route::post('/', 'Api\Feed\CreateController@index')->name('feed.store');
    Route::get('/{id}', 'Api\Feed\ShowController@index')->name('feed.view');
    Route::get('/{id}/comments', 'Api\Feed\AllCommentController@index')->name('feed.comment.index');
    Route::post('/{id}/comments', 'Api\Feed\CreateCommentController@index')->name('feed.comment.store');
    Route::get('/{id}/likes', 'Api\Feed\AllLikesController@index')->name('feed.like.index');
    Route::post('/{id}/likes', 'Api\Feed\CreateLikesController@index')->name('feed.like.store');
});
