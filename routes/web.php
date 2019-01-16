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
Route::get('/', 'HomeController@index2')->name('home');
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

Route::get('/convenio', 'ConvenioController@index')->name('convenio');
Route::get('/convenioRegistrar', 'ConvenioController@index2')->name('convenioRegistrar');
Route::post('/conveniosStore','ConvenioController@store')->name('conveniosStore');
Route::get('showConvenios','ConvenioController@show')->name('showConvenios');
Route::get('convenio/{id}','ConvenioController@mostrarEvidencia')->name('evidencia');
Route::resource('convenio','ConvenioController');
Route::get('listarConvenio/{id}','ConvenioController@mostrarConvenio')->name('listarConvenio');


Route::get('/organizacion', 'OrganizacionController@index')->name('organizacion');
Route::get('/agregar-organizaciones', 'OrganizacionController@index2');
Route::post('/agregar-organizaciones', 'OrganizacionController@store')->name('agregar-organizaciones');
Route::delete('/delete-organizaciones', 'OrganizacionController@destroy')->name('delete-organizaciones');
Route::resource('organizaciones', 'OrganizacionController');




Route::get('/organizationList', 'OrganizacionController@show')->name('organizationList');


Route::get('/actividadExtension', 'ActividadExtensionController@index')->name('actividadExtension');
Route::get('/actividad-extension', 'ActividadExtensionController@index2')->name('actividad-extension');
Route::get('/listarActividadesExtension', 'ActividadExtensionController@show')->name('listarActividadesExtension');
Route::post('/actividad-extension', 'ActividadExtensionController@store')->name('actividad-extension');
Route::resource('actividadesExtension','ActividadExtensionController');

Route::get('/actividadAprendizajeServicio', 'ActividadAprendizajeServicioController@index')->name('actividadAprendizajeServicio');
Route::get('/actividad-aprendizaje-servicio', 'ActividadAprendizajeServicioController@index2');
Route::post('/actividad-aprendizaje-servicio', 'ActividadAprendizajeServicioController@store')->name('actividad-aprendizaje-servicio');
Route::get('/listar-actividad-aprendizaje-servicios', 'ActividadAprendizajeServicioController@show')->name('actividadAprendizajeServiciosList');
Route::resource('actividadAprendizajeServicios', 'ActividadAprendisajeServicioController');
Route::delete('/delete-actividad-aprendizaje-servicios', 'TituladosController@destroy')->name('delete-actividad-aprendizaje-servicios');



Route::get('/titulado','TituladoController@index')->name('titulado');
Route::get('/registrar-titulados','TituladoController@index2');
Route::post('/registrar-titulados','TituladoController@store')->name('registrar-titulados');
Route::get('/listar-titulados', 'TituladoController@show')->name('tituladoList');
Route::resource('titulados', 'TituladoController');
Route::delete('/delete-titulados', 'TituladosController@destroy')->name('delete-titulados');


Route::get('/actividadTitulacion', 'ActividadTitulacionController@index')->name('actividadTitulacion');
Route::get('/registrar-titulacion-convenio', 'ActividadTitulacionController@index2');
Route::post('/registrar-titulacion-convenio', 'ActividadTitulacionController@store')->name('registrar-titulacion-convenio');

