<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurateurs;

class RestaurateursController extends Controller
{
    public function index(){
        $restaurateurs = Restaurateurs::all();
        return view('restaurateurs.index', compact('restaurateurs'));
    }

    public function edit($restaurateurId){
        $restaurateur = Restaurateurs::where('id_restaurateur', $restaurateurId)->first();
        return view('restaurateurs.edit', compact('restaurateur'));
    }

    public function update(Request $request, $restaurateurId){
        $restaurateur = Restaurateurs::where('id_restaurateur', $restaurateurId)->first();
        $restaurateur->nom = $request->get('nom');
        $restaurateur->logo= $request->get('logo');
        $restaurateur->save();

        return redirect()->route('restaurateurs.edit', $restaurateur->id_restaurateur);
    }
}
