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
use App\Articulo;

Route::get('/', function () {
    return view('layouts.master');
});

Route::get('articulos', function(){
    $articulos = Articulo::all();
    return view('articulos.index')->with('articulos',$articulos);
});

Route::resource('articulos', 'ArticulosController');
