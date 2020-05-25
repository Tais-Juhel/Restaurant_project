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

//Page Administrateurs
Route::get('/admin/membres', 'MembresController@index')->name('admin.membres.index');
Route::get('/admin/membres/{id}/modify', 'MembresController@edit')->name('admin.membres.edit');
