<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/produto/novo', 'ProdutoController@store');
Route::get('/produtos', 'ProdutoController@index');
Route::get('/produto/del/{id}','ProdutoController@destroy');
Route::get('/produto/{id}','ProdutoController@getId');
Route::post('/produto/update/{id}','ProdutoController@update');