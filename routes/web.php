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
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

// ----------------------------------------

Route::get('/mapa', 'landingController@mapa')->name('mapa');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/modprofile', function () {
    return view('modprofile');
})->name('modprofile');

Route::get('locale/{locale}', function($locale){
	Session::put('locale',$locale);
	return redirect()->back();
})->name('locale');

Route::post("/modprofile","UserController@update")->name("update");