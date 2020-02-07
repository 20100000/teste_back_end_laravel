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
//devedores
Route::get('devedores' , 'DevedorController@todosDevedores');
Route::post('devedores' , 'DevedorController@addDevedor');
Route::post('devedores/find/{nome}' , 'DevedorController@buscarDevedor');
Route::delete('devedor/{id}' , 'DevedorController@removeDevedor');
Route::put('devedor/{id}' , 'DevedorController@updateDevedor');
Route::get('devedor/{id}' , 'DevedorController@getDevedor');
//dividas
Route::get('dividas/{dev_id}' , 'DividaController@getDividas');
Route::post('dividas/{dev_id}' , 'DividaController@addDivida');
