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
Route::get('/admin/membres', 'MembresController@index')->name('admin.membres.index');
Route::get('/admin/membre/{id}/modify', 'MembresController@edit')->name('admin.membre.edit');
Route::put('/admin/membre/update/{id}', 'MembresController@update')->name('admin.membre.update');
//---
Route::get('/admin/plats', 'PlatsController@index')->name('admin.plats.index');
Route::get('/admin/plat/{id}/modify', 'PlatsController@edit')->name('admin.plat.edit');
Route::put('/admin/plat/update/{id}', 'PlatsController@update')->name('admin.plat.update');
