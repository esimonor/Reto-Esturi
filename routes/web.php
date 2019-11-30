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
    return view('welcome');
})->name('welcome');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

// ----------------------------------------
//Auth::routes();

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::resetPassword();

// Password Confirmation Routes...
Route::confirmPassword();


// Email Verification Routes...

Route::emailVerification();

// ----------------------------------------
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/modprofile', function () {
    return view('modprofile');
})->name('modprofile');
