<?php

namespace App\Http\Controllers;

use App\Plats;
use App\Restaurateurs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlatsController extends Controller
{
    public function index($restau){
        $auth = Auth::user();
        $restaurant = Restaurateurs::where('nom', $restau)->first();
        $plats = Plats::all()->where('id_restaurateur', $restaurant->id_restaurateur);
        return view('plats.index', compact('plats', 'restaurant', 'auth'));
    }

    public function edit($platId){
        $plat = Plats::where('id_plat', $platId)->first();
        return view('plats.edit', compact('plat'));
    }

    public function update(Request $request, $platId){
        $plat = Plats::where('id_plat', $platId)->first();
        $plat->nom = $request->get('nom');
        $plat->photo= $request->get('photo');
        $plat->prix = $request->get('prix');
        $plat->note = $request->get('note');
        $plat->save();

        return redirect()->route('plats.edit', $plat->id_plat);
    }
}
