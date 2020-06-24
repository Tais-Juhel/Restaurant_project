<?php

use Illuminate\Support\Facades\Route;

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

//Membres
Route::get('/membres', 'MembresController@index')->name('membres.index');
Route::get('/membres/create', 'MembresController@create')->name('membres.create')->middleware('can:newM-users');
Route::post('/membres/store', 'MembresController@store')->name('membres.store');
Route::get('/membres/{id}/modify', 'MembresController@edit')->name('membres.edit');
Route::put('/membres/update/{id}', 'MembresController@update')->name('membres.update');

//Plats
Route::get('/plats/{restau}', 'PlatsController@index')->name('plats.index');
Route::get('/plats/{id}/modify', 'PlatsController@edit')->name('plats.edit')->middleware('can:restau-users');
Route::put('/plats/update/{id}', 'PlatsController@update')->name('plats.update');

//Restau
Route::get('/restaurateurs', 'RestaurateursController@index')->name('restaurateurs.index');
Route::get('/restaurateurs/{id}/modify', 'RestaurateursController@edit')->name('restaurateurs.edit');
Route::put('/restaurateurs/update/{id}', 'RestaurateursController@update')->name('restaurateurs.update');
Route::get('/restaurateurs/create', 'RestaurateursController@create')->name('restaurateurs.create')->middleware('can:newR-users');
Route::post('/restaurateurs/store', 'RestaurateursController@store')->name('restaurateurs.store');
Route::get('/dashbord', 'DashbordController@restau')->name('restau.dashbord')->middleware('can:restau-users');

//Profil
Route::get('/profil', 'Admin\UsersController@profil')->name('auth.show');
Route::put('/profil/update', 'Admin\UsersController@updateA')->name('auth.update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Admin
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('users', 'UsersController');
});
