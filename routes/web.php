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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('user')->group(function (){
    Route::get('/', 'userProfileEdit@index')->name('user.edit');
    Route::post('/','userProfileEdit@update')->name('user.edit.submit');
});

Route::prefix('admin')->group(function (){
    Route::get('/add', 'adminController@showAddUsers')->name('admin.addUser');
    Route::post('/add', 'adminController@rdaStore')->name('admin.addUser.submit');


    Route::get('/login', 'Auth\adminLoginsController@showLogin')->name('admin.login');
    Route::post('/login', 'Auth\adminLoginsController@Login')->name('admin.login.submit');
    Route::get('/', 'adminController@index')->name('admin');
});

Route::prefix('ins')->group(function (){
    Route::get('/login', 'Auth\insLoginsController@showLogin')->name('ins.login');
    Route::post('/login', 'Auth\insLoginsController@Login')->name('ins.login.submit');
    Route::get('/', 'insController@index')->name('ins');
});

Route::prefix('police')->group(function (){
    Route::get('/login', 'Auth\policeLoginsController@showLogin')->name('police.login');
    Route::post('/login', 'Auth\policeLoginsController@Login')->name('police.login.submit');
    Route::get('/', 'policeController@index')->name('police');
});
Route::prefix('rda')->group(function (){
    Route::get('/login', 'Auth\rdaLoginsController@showLogin')->name('rda.login');
    Route::post('/login', 'Auth\rdaLoginsController@Login')->name('rda.login.submit');
    Route::get('/', 'rdaController@index')->name('rda');
});







