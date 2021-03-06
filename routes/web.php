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
    return view('auth.login');
});

Route::post('login', function () {
    return view('auth.login');
})->name('login');
Route::post('register', function () {
    return view('auth.register');
})->name('register');
Route::post('password', function () {
    return view('auth.register');
})->name('password.request');