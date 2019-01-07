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

Route::get('/convenios', 'ConvenioController@index')->name('convenios');

Route::post('/convenios','ConvernioController@store')->name('agregarConvenio');
Route::get('/actividad-extension', 'ActividadExtensionController@index')->name('actividad-extension');

Route::get('/actividad-aprendizaje-servicio', 'ActividadAprendizajeServicioController@index')->name('actividad-aprendizaje-servicio');

Route::get('/agregar-organizaciones', 'OrganizacionController@create')->name('agregar-organizaciones');
Route::get('/listar-organizaciones', 'OrganizacionController@index')->name('organizationList');
Route::post('/agregar-organizaciones', 'OrganizacionController@store')->name('agregar-organizaciones');
Route::get('/actividad-extension', 'ActividadExtensionController@index')->name('actividad-extension');

Route::get('/actividad-aprendizaje-servicio', 'ActividadAprendizajeServicioController@index')->name('actividad-aprendizaje-servicio');


//Route::get('/agregar-organizaciones', function () {
  //  return view('agregar-organizaciones');
//});

//Route::post('/agregar-organizaciones', function () {
  //  return view('agregar-organizaciones');
//})->name('organizaciones');

Route::get('/registrar-titulados', function () {
    return view('registrar-titulados');
});

Route::post('/registrar-titulados', function () {
    return view('registrar-titulados');
});

Route::get('/registrar-titulacion-convenio', function () {
    return view('registrar-titulacion-convenio');
});

Route::post('/registrar-titulacion-convenio', function () {
    return view('registrar-titulacion-convenio');
});