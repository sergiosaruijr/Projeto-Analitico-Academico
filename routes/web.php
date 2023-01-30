<?php

use Illuminate\Support\Facades\Route;

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

//Encontrar pra onde o login vai e arrumar para /inicio
Route::get('/', 'PagesController@home');
Route::get('/home', 'PagesController@home');
Route::get('/sobreNos', 'PagesController@about');
Route::get('/inicio', 'PagesController@home');
//Route::get('/teste', 'PagesController@teste');
Route::get('/create1', 'EventChartController@index');
Auth::routes();

Route::get('/dashboardEventos', 'HomeController@index');

Auth::routes();

Route::get('/dashboardEventos', 'HomeController@index');
Route::any('/dashboard/search','EventsController@search')->name('filtros');
Route::resource('dashboardEventos','EventsController');
Route::resource('perfilDoUsuario','UsersController');
Route::get('perfilDoUsuario/{perfilDoUsuario}','UsersController@profile')->name('userProfile')->middleware('auth');

Route::get('/dashboard', 'EventChartController@index');

Route::get('/teste', 'EventsController@indexDatatables');