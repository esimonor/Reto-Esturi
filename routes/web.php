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

//Ruta perfil usuario estandar
Route::get('/profile', function () {
    return view('profile');
})->name('profile');

//Ruta formulario modificar perfil
Route::get('/modprofile', function () {
    return view('modprofile');
})->name('modprofile');
//Ruta al formulario para añadir un local
Route::get('/addlocal', function () {
    return view('addlocal');
})->name('addlocal');

Route::post("/addlocal", "OwnerController@addlocal")->name("addLocal");

//Ruta para el prefil de owner
Route::get('/homeOwner', 'OwnerController@redirect')->name('homeOwner');

//Ruta al perfil admin
Route::get('/homeAdmin', function () {
    return view('homeAdmin');
})->name('homeAdmin');

//Cambio de idiomas
Route::get('locale/{locale}', function($locale){
	Session::put('locale',$locale);
	return redirect()->back();
})->name('locale');

//Ruta para listar usuarios
Route::get("/listUsers", "AdminController@indexUsers")->name("listusers");

//Ruta para eliminar usuarios
Route::get("/listUsers/{id}", "AdminController@destroyUsers")->name("deleteusers");

//Ruta para listar establecimientos 
Route::get("/listEstablishments", "AdminController@indexEstablishments")->name("listEstablishments");

//Ruta para eliminar establecimientos
Route::get("/listEstablishments/{id}", "AdminController@destroyEstablishments")->name("deleteEstablishments");
