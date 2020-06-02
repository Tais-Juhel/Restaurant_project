<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Membres;
use App\Utilisateurs;

class MembresController extends Controller
{
    public function index(){
        $membres = Membres::all();
        $user = Utilisateurs::all();
        return view('administrateurs.membres.index', compact('membres', 'user'));
    }

    public function edit($membreId){
        $membre = Membres::where('id_membre', $membreId)->first();
        return view('administrateurs.membres.edit', compact('membre'));
    }

    public function update(Request $request, $membreId){
        $membre = Membres::where('id_membre', $membreId)->first();
        $membre->prenom = $request->get('prenom');
        $membre->nom= $request->get('nom');
        $membre->solde = $request->get('solde');
        $membre->save();

        return redirect()->route('admin.membre.edit', $membre->id_membre);
    }

    public function store(Request $request){
        $membre = new Membres;
        $membre->prenom = $request->get('prenom');
        $membre->nom= $request->get('nom');
        $membre->solde = $request->get('solde');
        $membre->created_at = $request->get('create_at');
        $membre->save();

        
        return redirect()->route('membres.create');
    }

    public function show($membreId)
    {
        $membre = Membres::where('id', $membreId)->first();
        return view('membres.show', compact('membre'));
    }
}
