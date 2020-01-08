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

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified')->middleware('vistadeloginsegunelrol');

// ----------------------------------------

Route::get('/mapa', 'landingController@mapa')->name('mapa');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/modprofile', function () {
    return view('modprofile');
})->name('modprofile');

Route::get('/eliminarperfil', function () {
    return view('eliminarperfil');
})->name('eliminarperfil');

Route::get('locale/{locale}', function($locale){
	Session::put('locale',$locale);
	return redirect()->back();
})->name('locale');


Route::get('/estandar', 'EstandarController@index')->name('estandar');
Route::get('/owner', 'OwnerController@index')->name('owner');

Route::post("/modprofile","UserController@update")->name("update");








//rutas temporales para que funcione el middleware que redirecciona segun el rol del usuario luego se haran en controlador
Route::get('homeAdmin',function(){
	return view('homeAdmin');
})->name('homeAdmin');
Route::get('usrvis',function(){
	return view('estandariniciosecionprimeraves');
});Route::get('ownvis',function(){
	return view('vistadelusuariopropietario');
});


//Ruta para listar usuarios
Route::get("/listUsers", "AdminController@index")->name("listusers");
