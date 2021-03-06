<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. Theses
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/ahlem/{name}','ahlemController@A1');
Route::get('/med','ahlemController@med');



Route::get('/form','profilcontroller@formu');
Route::post('/form/1','profilcontroller@Eng');
Route::get('/form/liste','profilcontroller@listProfil');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
