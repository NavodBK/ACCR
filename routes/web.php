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
    Route::post('/vehicle/update', 'homeController@vehicleUpdate')->name('vehicle.update');
    Route::post('/vehicle/delete', 'homeController@vehicleDelete')->name('vehicle.delete');
    Route::post('/vehicle', 'homeController@vehicleStore')->name('vehicle.store');
    Route::post('/update', 'homeController@userDataUpdate')->name('user.update');
});

Route::prefix('admin')->group(function (){
    Route::get('/add', 'adminController@showAddUsers')->name('admin.addUser');
    Route::post('/add', 'adminController@rdaStore')->name('admin.addUser.submit');

    Route::get('/ins', 'admin_insController@index')->name('admin.ins');
    Route::post('/ins/new', 'admin_insController@store')->name('admin.ins.new');

    Route::get('/police', 'admin_policeController@index')->name('admin.police');
    Route::post('/police/new', 'admin_policeController@store')->name('admin.police.new');

    Route::get('/admins', 'admin_adminsController@index')->name('admin.admins');
    Route::post('/admins/new', 'admin_adminsController@store')->name('admin.admins.new');
    Route::post('admins/delete','admin_adminsController@destroy')->name('admin.admins.delete');

    Route::get('/rda', 'admin_rdaController@index')->name('admin.rda');
    Route::post('/rda/new', 'admin_rdaController@store')->name('admin.rda.new');

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







