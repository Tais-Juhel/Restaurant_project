<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//
//

Use App\Administrateurs;
 
Route::get('administrateurs', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Administrateurs::all();
});
 
Route::get('administrateurs/{id}', function($id) {
    return Administrateurs::find($id);
});

Route::post('administrateurs', function(Request $request) {
    return Administrateurs::create($request->all);
});

Route::put('administrateurs/{id}', function(Request $request, $id) {
    $administrateurs = Administrateurs::findOrFail($id);
    $administrateurs->update($request->all());

    return $administrateurs;
});

Route::delete('administrateurs/{id}', function($id) {
    Administrateurs::find($id)->delete();

    return 204;
});

//
//

Use App\Commandes;
 
Route::get('commandes', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Commandes::all();
});
 
Route::get('commandes/{id}', function($id) {
    return Commandes::find($id);
});

Route::post('commandes', function(Request $request) {
    return Commandes::create($request->all);
});

Route::put('commandes/{id}', function(Request $request, $id) {
    $commandes = Commandes::findOrFail($id);
    $commandes->update($request->all());

    return $commandes;
});

Route::delete('commandes/{id}', function($id) {
    Commandes::find($id)->delete();

    return 204;
});

//
//

Use App\Membres;
 
Route::get('membres', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Membres::all();
});
 
Route::get('membres/{id}', function($id) {
    return Membres::find($id);
});

Route::post('membres', function(Request $request) {
    return Membres::create($request->all);
});

Route::put('membres/{id}', function(Request $request, $id) {
    $membres = Membres::findOrFail($id);
    $membres->update($request->all());

    return $membres;
});

Route::delete('membres/{id}', function($id) {
    Membres::find($id)->delete();

    return 204;
});

//
//

Use App\Plats;
 
Route::get('plats', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Plats::all();
});
 
Route::get('plats/{id}', function($id) {
    return Plats::find($id);
});

Route::post('plats', function(Request $request) {
    return Plats::create($request->all);
});

Route::put('plats/{id}', function(Request $request, $id) {
    $plats = Plats::findOrFail($id);
    $plats->update($request->all());

    return $plats;
});

Route::delete('plats/{id}', function($id) {
    Plats::find($id)->delete();

    return 204;
});

//
//

Use App\Restaurateurs;
 
Route::get('restaurateurs', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Restaurateurs::all();
});
 
Route::get('restaurateurs/{id}', function($id) {
    return Restaurateurs::find($id);
});

Route::post('restaurateurs', function(Request $request) {
    return Restaurateurs::create($request->all);
});

Route::put('restaurateurs/{id}', function(Request $request, $id) {
    $restaurateurs = Restaurateurs::findOrFail($id);
    $restaurateurs->update($request->all());

    return $restaurateurs;
});

Route::delete('restaurateurs/{id}', function($id) {
    Restaurateurs::find($id)->delete();

    return 204;
});

//
//

Use App\Utilisateurs;
 
Route::get('utilisateurs', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Restaurateurs::all();
});
 
Route::get('utilisateurs/{id}', function($id) {
    return Utilisateurs::find($id);
});

Route::post('utilisateurs', function(Request $request) {
    return Utilisateurs::create($request->all);
});

Route::put('utilisateurs/{id}', function(Request $request, $id) {
    $utilisateurs = Utilisateurs::findOrFail($id);
    $utilisateurs->update($request->all());

    return $utilisateurs;
});

Route::delete('utilisateurs/{id}', function($id) {
    Utilisateurs::find($id)->delete();

    return 204;
});