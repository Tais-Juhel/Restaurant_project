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

//Pages Administrateurs
Route::get('/admin/membres', 'MembresController@index')->name('membres.index');
Route::get('/admin/membres/{id}/modify', 'MembresController@edit')->name('membres.edit');
Route::put('/admin/membres/update/{id}', 'MembresController@update')->name('membres.update');
//---
Route::get('/admin/plats', 'PlatsController@index')->name('plats.index');
Route::get('/admin/plats/{id}/modify', 'PlatsController@edit')->name('plats.edit');
Route::put('/admin/plats/update/{id}', 'PlatsController@update')->name('plats.update');
//---
Route::get('/admin/restaurateurs', 'RestaurateursController@index')->name('restaurateurs.index');
Route::get('/admin/restaurateurs/{id}/modify', 'RestaurateursController@edit')->name('restaurateurs.edit');
Route::put('/admin/restaurateurs/update/{id}', 'RestaurateursController@update')->name('restaurateurs.update');



//Pages Membres
Route::get('/membre/membres', 'MembresController@index')->name('membres.index');
Route::get('/membre/membres/{id}/modify', 'MembresController@edit')->name('membres.edit');
Route::put('/membre/membres/update/{id}', 'MembresController@update')->name('membres.update');
//---
Route::get('/membre/plats', 'PlatsController@index')->name('plats.index');
Route::get('/membre/plats/{id}/modify', 'PlatsController@edit')->name('plats.edit');
Route::put('/membre/plats/update/{id}', 'PlatsController@update')->name('plats.update');
//---
Route::get('/membre/restaurateurs', 'RestaurateursController@index')->name('restaurateurs.index');
Route::get('/membre/restaurateurs/{id}/modify', 'RestaurateursController@edit')->name('restaurateurs.edit');
Route::put('/membre/restaurateurs/update/{id}', 'RestaurateursController@update')->name('restaurateurs.update');
