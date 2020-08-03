<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

*/

Route::get('/', function () {
    return view('home');
});

//.................Roles Routes..............................//    
Route::get('/roleindex','RoleController@index')->name('roleindex');
Route::get('/rolecreate','RoleController@create')->name('rolecreate');
Route::post('/rolestore','RoleController@store')->name('rolestore');
Route::get('/roleedit{id}','RoleController@edit')->name('roleedit');
Route::post('roleupdate{id}','RoleController@update')->name('roleupdate');
Route::post('roledestroy/{id}','RoleController@destroy')->name('roledestroy');


//.................User Routes...............................//
Route::get('/userindex','UserController@index')->name('userindex');
Route::get('/usercreate','UserController@create')->name('usercreate');
Route::post('/userstore','UserController@store')->name('userstore');

//.................User Profiles Routes.....................//
