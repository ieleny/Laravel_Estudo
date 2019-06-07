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

//use app\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

/* CHAMAR O CONTROLLER DO LOGIN */
// Route::get('Login', function () {
//     //$LoginController = new LoginController();
//     //$LoginController->index();
// });

Route::get('Login/index','LoginController@index');

Route::post('Login/create','LoginController@create');

Route::get('blade', function () {
    return view('loginView');
});

Route::get('create', function () {
    return view('create');
});

Route::get('Login/{id}/edit',['as'=>'Login.edit','uses'=>'LoginController@edit']);

Route::get('Login/{id}/delete',['as'=>'Login.delete','uses'=>'LoginController@delete']);

Route::put('Login/{id}/update','LoginController@update');

