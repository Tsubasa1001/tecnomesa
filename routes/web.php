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
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {

	Route::get('/home', 'HomeController@index')->name('home');

	// 1 
	Route::resource('usuario','UserController');
	Route::get('usuario/data/user/{reg}','UserController@getUserData')->name('user_api');

	Route::resource('empresa','EmpresaController');
	Route::resource('regimen','RegimenController');
	Route::resource('sector','SectorController');

	Route::resource('privilegio','PermisoController');
	Route::resource('rol','RolController');


	// 2
	Route::resource('egresado','UserController');
	Route::resource('avance','UserController');
	Route::resource('asignacion','UserController');
	Route::resource('evaluacion','PermisoController');
	
	// 3
	Route::resource('titulado','PermisoController');
	Route::resource('postgrado','PermisoController');
	Route::resource('inflaboral','PermisoController');
});
