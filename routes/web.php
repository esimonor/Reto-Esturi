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

Route::get('/categorias', function () {
    return view('categorias');
})->name('categorias');

// ----------------------------------------

Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified')->middleware('vistadeloginsegunelrol');
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

Route::get('/eliminarperfil', function () {
    return view('eliminarperfil');
})->name('eliminarperfil');

Route::post("/addlocal", "OwnerController@addlocal")->name("addLocal");

//Ruta para el prefil de owner
Route::get('/homeOwner', 'OwnerController@show')->name('homeOwner');

Route::get('/eliminarperfil', function () {
    return view('eliminarperfil');
})->name('eliminarperfil');

//Ruta al perfil admin
Route::get('/homeAdmin', function () {
    return view('homeAdmin');
})->name('homeAdmin');

//Cambio de idiomas
Route::get('locale/{locale}', function($locale){
	Session::put('locale',$locale);
	return redirect()->back();
})->name('locale');

Route::get('/estandar', 'EstandarController@index')->name('estandar');

Route::get('/owner', 'OwnerController@index')->name('owner');Route::post("/modprofile","UserController@update")->name("update");//rutas temporales para que funcione el middleware que redirecciona segun el rol del usuario luego se haran en controlador

//rutas temporales para que funcione el middleware que redirecciona segun el rol del usuario luego se haran en controlador
Route::get('ownvis',function(){
	return view('homeOwner');
});


//controlador para modificar los gustos
Route::resource('gustos','ControladordeGustos');

//Ruta para listar usuarios
Route::get("/listUsers", "AdminController@indexUsers")->name("listusers");

//Ruta para eliminar usuarios como administrador
Route::get("/listUsers/{id}", "AdminController@destroyUsers")->name("deleteusers");

//Ruta para eliminar usuarios
Route::get("/listUsers/{id}", "AdminController@destroyUsers")->name("deleteusers");

//Envía los datos al formulario de editar sitio
Route::get("/editSite/{id}","OwnerController@editlocal")->name('editlocal');

//Edita el sitio con los datos del formulario
Route::post("/homeOwner","OwnerController@updatelocal")->name("updatelocal");

//Ruta para listar establecimientos 
Route::get("/listEstablishments", "AdminController@indexEstablishments")->name("listEstablishments");

//Ruta para eliminar establecimientos
Route::get("/listEstablishments/{id}", "AdminController@destroyEstablishments")->name("deleteEstablishments");

//Elimina el sitio
Route::get("/editsite/{id}","OwnerController@destroy")->name('deletelocal');






//middlewares que solo dejan parar al usuario que tiene el nombre del propio middleware
//->middleware('administrador');
//->middleware('usuario');
//->middleware('propietario');

