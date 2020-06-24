<?php

namespace App\Http\Controllers;

use App\Role;
use App\Restaurateurs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RestaurateursController extends Controller
{
    public function index(){
        $restaurateurs = Restaurateurs::all();
        $auth = Auth::user();
        return view('restaurateurs.index', compact('restaurateurs', 'auth'));
    }

    public function create(){
        return view('restaurateurs.create');
    }

    public function store(Request $request){
        $user = Auth::user();

        $restau = new Restaurateurs;
        $restau->nom = $request->get('nom');
        $restau->logo = $request->get('logo');
        $restau->id_utilisateur = $user->id;
        $restau->save();

        $role = Role::select('id')->where('name', 'restau')->first();
        $user->roles()->sync($request->roles);
        $user->roles()->attach($role);

        return redirect()->route('restau.dashbord');
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
