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

//con el metodo view estamos diciendo que cunado valla a la url nose devuelva tal vista

Route::view('/', 'home')->name('inicio');

Route::view('/Contacto', 'contacto')->name('Contacto');

Route::get('/Administrar', 'AdminController@index')->name('Administrar');
Route::get('/Administrar/EditarColor{id}','ColorController@editar')->name('Colores.Editar');
Route::Put('/Administrar/EditarColor{id}','ColorController@update')->name('actualizarColor');
Route::get('/Administrar/Editar{id}','AdminController@editar')->name('titulos.editar');
Route::Put('/Administrar/Editar{id}','AdminController@update')->name('actualizar.Menu');
Auth::routes();

