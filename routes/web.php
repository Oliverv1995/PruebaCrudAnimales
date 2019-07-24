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
Route::get('/tipovista','tipoanimalcontroller@vista');
Route::post('tipoanimal','tipoanimalcontroller@guardar')->name('tipoanimal');
Route::get('tipoanimal/lista','tipoanimalcontroller@mostrar')->name('tipolista');
Route::delete('delete/{id}','tipoanimalcontroller@eliminar')->name('delete');
Route::get('edit/{id}','tipoanimalcontroller@editar');
Route::put('update/{id}','tipoanimalcontroller@modificar');


Route::get('/animalvista','animalcontroller@vista');
Route::post('animal','animalcontroller@guardar');
Route::get('animal/lista','animalcontroller@mostrar')->name('animallista');
Route::delete('eliminar/{id}','animalcontroller@eliminar')->name('eliminar');
Route::get('editar/{id}','animalcontroller@editar');
Route::put('actualizar/{id}','animalcontroller@modificar');


Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
