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
Route::get('/membres/create', 'MembresController@create')->name('membres.create')->middleware('can:newM-users');
Route::post('/membres/store', 'MembresController@store')->name('membres.store')->middleware('can:newM-users');

//Plats
Route::get('/plats/{restau}', 'PlatsController@index')->name('plats.index');
Route::get('/plats/{id}/modify', 'PlatsController@edit')->name('plats.edit')->middleware('can:restau-users');
Route::put('/plats/update/{id}', 'PlatsController@update')->name('plats.update')->middleware('can:restau-users');
Route::get('/plat/create', 'PlatsController@create')->name('plats.create')->middleware('can:restau-users');
Route::post('/plat/store', 'PlatsController@store')->name('plats.store')->middleware('can:restau-users');
Route::delete('/plat/delete/{id}', 'PlatsController@delete')->name('plats.delete')->middleware('can:restau-users');

//Restau
Route::get('/restaurateurs', 'RestaurateursController@index')->name('restaurateurs.index');
Route::get('/restaurateurs/create', 'RestaurateursController@create')->name('restaurateurs.create')->middleware('can:newR-users');
Route::post('/restaurateurs/store', 'RestaurateursController@store')->name('restaurateurs.store')->middleware('can:newR-users');
Route::get('/dashbord', 'DashbordController@restau')->name('restau.dashbord')->middleware('can:restau-users');

//Commande
Route::post('/commandes/create/{id}', 'CommandesController@create')->name('commandes.create')->middleware('can:membre-users');
Route::post('/commandes/store', 'CommandesController@store')->name('commandes.store')->middleware('can:membre-users');
Route::get('/commandes', 'CommandesController@index')->name('commandes.index')->middleware('can:membre-users');


//Profil
Route::get('/profil', 'Admin\UsersController@profil')->name('auth.show');
Route::put('/profil/update', 'Admin\UsersController@updateA')->name('auth.update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Admin
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:admin-users')->group(function(){
    Route::resource('users', 'UsersController');
});
