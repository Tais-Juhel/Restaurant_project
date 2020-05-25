<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Membres;

class MembresController extends Controller
{
    public function index(){
        $membres = Membres::all();
        return view('administrateurs.membres.index', compact('membres'));
    }

    public function edit(){
        return view('administrateurs.membres.edit');
    }

    public function store(Request $request){
        $contact = new Membres;
        $contact->prenom = $request->get('prenom');
        $contact->nom= $request->get('nom');
        $contact->solde = $request->get('solde');
        $contact->created_at = $request->get('create_at');
        $contact->save();

        
        return redirect()->route('membres.create');
    }

    public function show($contactId)
    {
        $contact = Membres::where('id', $membreId)->first();
        return view('contacts.show', compact('membre'));
    }
}
