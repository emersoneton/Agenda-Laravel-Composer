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

Route::get("/", function () {

    return view ('template.app');

});

//Route::group(["prefix" => "pessoas"],function(){

//    Route::get("/", "PessoasController@index");

//});

/*


route::group(['prefix' => 'teste'], function (){

    Route::get('/', function (){
        return view('teste');
    });

});

route::get('/teste', function (){

    return view('teste');

});*/
