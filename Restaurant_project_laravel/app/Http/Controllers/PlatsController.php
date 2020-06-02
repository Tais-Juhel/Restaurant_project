<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plats;

class PlatsController extends Controller
{
    public function index(){
        $plats = Plats::all();
        return view('administrateurs.plats.index', compact('plats'));
    }

    public function edit($platId){
        $plat = Plats::where('id_plat', $platId)->first();
        return view('administrateurs.plats.edit', compact('plat'));
    }

    public function update(Request $request, $platId){
        $plat = Plats::where('id_plat', $platId)->first();
        $plat->nom = $request->get('nom');
        $plat->photo= $request->get('photo');
        $plat->prix = $request->get('prix');
        $plat->note = $request->get('note');
        $plat->save();

        return redirect()->route('admin.plat.edit', $plat->id_plat);
    }
}
