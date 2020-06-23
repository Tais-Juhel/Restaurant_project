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
Route::get('/membres/{id}/modify', 'MembresController@edit')->name('membres.edit');
Route::put('/membres/update/{id}', 'MembresController@update')->name('membres.update');

//Plats
Route::get('/plats', 'PlatsController@index')->name('plats.index');
Route::get('/plats/{id}/modify', 'PlatsController@edit')->name('plats.edit');
Route::put('/plats/update/{id}', 'PlatsController@update')->name('plats.update');

//Restau
Route::get('/restaurateurs', 'RestaurateursController@index')->name('restaurateurs.index');
Route::get('/restaurateurs/{id}/modify', 'RestaurateursController@edit')->name('restaurateurs.edit');
Route::put('/restaurateurs/update/{id}', 'RestaurateursController@update')->name('restaurateurs.update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Admin
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('users', 'UsersController');
});
