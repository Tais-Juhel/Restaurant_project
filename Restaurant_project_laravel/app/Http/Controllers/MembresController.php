<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use App\Membres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MembresController extends Controller
{
    public function index(){
        $membres = Membres::all();
        $user = User::all();
        return view('membres.index', compact('membres', 'user'));
    }

    public function edit($membreId){
        $membre = Membres::where('id_membre', $membreId)->first();
        return view('membres.edit', compact('membre'));
    }

    public function update(Request $request, $membreId){
        $membre = Membres::where('id_membre', $membreId)->first();
        $membre->prenom = $request->get('prenom');
        $membre->nom= $request->get('nom');
        $membre->solde = $request->get('solde');
        $membre->save();

        return redirect()->route('membres.edit', $membre->id_membre);
    }

    public function create(){
        return view('membres.create');
    }

    public function store(Request $request){
        $user = Auth::user();

        $membre = new Membres;
        $membre->prenom = $request->get('prenom');
        $membre->nom= $request->get('nom');
        $membre->solde = "0.0";
        $membre->adresse = $request->get('adresse');
        $membre->id_utilisateur = $user->id;
        $membre->save();

        $role = Role::select('id')->where('name', 'membre')->first();
        $user->roles()->sync($request->roles);
        $user->roles()->attach($role);
        
        return redirect()->route('restaurateurs.index');
    }

    public function show($membreId)
    {
        $membre = Membres::where('id', $membreId)->first();
        return view('membres.show', compact('membre'));
    }
}
