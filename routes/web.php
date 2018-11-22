<?php

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
    return view('landing');
})->name('index');

Route::get('/home', function () {
    return view('dashboard');
})->name('home');

Route::get('/explore', function () {
    return view('explore');
})->name('explore');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/post', function () {
    return view('post');
})->name('post');

//Route::get('/connect', 'HomeController@index')->name('home');

Auth::routes();

