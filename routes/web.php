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




//Route::get('/', function () {
  //  return view('home');
//});

// Homepage Route
#Route::get('/', 'HomeController@index')->name('index');

//Route::get('/',function (){

//  return view('home');

//});
Route::get('/', 'HomeController@index')->name('home');
Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/home', 'HomeController@index')->middleware('auth');
//Route::get('/admin-home', 'HomeController@index')->middleware('AuthAdmin');
//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/home', 'HomeController@index')->middleware('auth');
Route::get('/login', 'Auth\LoginController@showLoginForm');
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('/register', 'Auth\RegisterController@register')->name('register');
//Route::get('/login', 'Auth\LoginController@showLoginForm');
//Route::post('/login/', 'Auth\LoginController@login')->name('login');
//Route::get('/logout', 'Auth\LoginController@logout');
//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/admin-home', 'HomeController@index')->middleware('AuthAdmin');

Route::get('/convenios', 'ConvenioController@index');
Route::post('/convenios','ConvernioController@store')->name('convenios');

Route::get('/agregar-organizaciones', 'OrganizacionController@index');
Route::post('/agregar-organizaciones', 'OrganizacionController@store')->name('agregar-organizaciones');


Route::get('/organizationList', 'OrganizacionController@show')->name('organizationList');

Route::get('/actividad-extension', 'ActividadExtensionController@index');
Route::get('/listarActividadesExtension', 'ActividadExtensionController@show')->name('listarActividadesExtension');
Route::post('/actividad-extension', 'ActividadExtensionController@store')->name('actividad-extension');

Route::get('/actividad-aprendizaje-servicio', 'ActividadAprendizajeServicioController@index');
Route::post('/actividad-aprendizaje-servicio', 'ActividadAprendizajeServicioController@index')->name('actividad-aprendizaje-servicio');

Route::get('/registrar-titulados', 'TituladoController@index');
Route::post('/registrar-titulados', 'TituladoController@store')->name('registrar-titulados');

Route::get('/registrar-titulacion-convenio', 'ActividadTitulacionController@index');
Route::post('/registrar-titulacion-convenio', 'ActividadTitulacionController@store')->name('registrar-titulacion-convenio');
