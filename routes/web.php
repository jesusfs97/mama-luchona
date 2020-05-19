<?php
Route::put('/imagenPrincipal', 'ArticulosController@imagenPrincipal' );
Route::get('/frase', 'FraseController@index'); // VueJS
Route::post('/frase-nueva', 'FraseController@store');
Route::get('/publicaciones', 'PublicacionController@index');
Route::put('/publicaciones-aceptar','PublicacionController@update');
Route::delete('/publicaciones-borrar{id}','PublicacionController@destroy');
Route::post('/pensamiento-guardar', 'PublicacionController@store');
Route::get('/pensamientos-aceptados','PublicacionController@show');

Route::get('/', 'ArticulosController@index')->name('inicio');
Route::get('/Crear_Articulo', 'ArticulosController@crear')->name('articulos.crear');
Route::post('/Guardar_Articulo', 'ArticulosController@guardar')->name('CrearArticulo');
Route::put('/subir/imagen', 'ArticulosController@imagen' );

Route::get('/Articulos/{Articulo}','ArticulosController@show')->name('articulos.ver');
Route::get('/Articulos/Editar/{Articulo}','ArticulosController@editar')->name('articulo.editar');
Route::put('/Articulos/Editar/{Articulo}','ArticulosController@update')->name('ActulizarArticulo');
Route::post('/CrearComentario{id}','ComentarioController@store')->name('CrearComentario');
Route::get('/Administrar', 'AdminController@index')->name('Administrar');
Route::resource('/Administrar/Menu', 'NavbarController');
Route::get('/Administrar/EditarColor{id}','ColorController@editar')->name('Colores.Editar');
Route::Put('/Administrar/EditarColor{id}','ColorController@update')->name('actualizarColor');
Route::get('/Mi_Cuenta{id}','UserController@edit')->name('MiCuenta');
Route::put('/Mi_Cuenta{id}','UserController@update')->name('Actualizar');
Auth::routes();

