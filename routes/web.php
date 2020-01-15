<?php
use App\User;
use App\Establishment;

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

Route::get('/mapa', 'SiteController@showSites')->name('mapa');

//Ruta perfil usuario estandar
Route::get('/profile','UserController@perfil')->name('profile'); 

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

Route::get('/mySites', 'SiteController@mySites')->name('mySites');


Route::get('/eliminarperfil', function () {
    return view('eliminarperfil');
})->name('eliminarperfil');

//Ruta al perfil admin
/*Route::get('/homeAdmin', function () {
    return view('homeAdmin');
})->name('homeAdmin');*/

Route::get("/homeAdmin", "AdminController@indexContacto")->name("homeAdmin");

Route::get("/homeAdmin/{id}", "AdminController@destroyContacto")->name("deleteContacto");


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

//Edita los usuarios con los datos del formulario
Route::post("/listUsers","AdminController@updateUsers")->name("updateUsers");

//ruta para que el administrador borre usuarios
Route::get("/listUsers/{id}", "AdminController@destroyUsers")->name("deleteusers");

//Envía los datos al formulario de editar sitio
Route::get("/editSite/{id}","OwnerController@editlocal")->name('editlocal');

//Edita el sitio con los datos del formulario
Route::post("/homeOwner","OwnerController@updatelocal")->name("updatelocal");

//Edita el sitio como admin
Route::post("/listEstablishments","AdminController@updateEstablishments")->name("updateEstablishments");

//ruta para que un usuario  pueda borrar su propia cuenta
Route::post("/modprofile","UserController@update")->name("update");
//ruta para que un usuario pueda modificar su perfil
Route::get('/owndrop/{id}','UserController@usuarioborrasupropiacuenta')->name('owndrop');

//Ruta para listar establecimientos 
Route::get("/listEstablishments", "AdminController@indexEstablishments")->name("listEstablishments");

//Ruta para eliminar establecimientos
Route::get("/listEstablishments/{id}", "AdminController@destroyEstablishments")->name("deleteEstablishments");

//Elimina el sitio
Route::get("/editsite/{id}","OwnerController@destroy")->name('deletelocal');




//esta es la ruta de la pagina de cada sitio
Route::get("/local/{id}","SiteController@localactual");
Route::resource('sitio','SiteController');

Route::get('ver',function(){;
    $comprobar=Establishment::get()->where('user_id',5)->where('establishment_id',2);
    return $comprobar;
});

Route::post('/welcome','contactoController@contactar')->name('contactar');

//middlewares que solo dejan parar al usuario que tiene el nombre del propio middleware
//->middleware('administrador');
//->middleware('usuario');
//->middleware('propietario');
Route::get('aa',function(){
    User::where('id',5)->restore();
});
