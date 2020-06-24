<?php

namespace App\Http\Controllers;

use App\Plats;
use App\Restaurateurs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

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
        $auth = Auth::user();

        $plat = Plats::where('id_plat', $platId)->first();
        $plat->nom = $request->get('nom');
        $plat->photo= $request->get('photo');
        $plat->prix = $request->get('prix');
        if($auth->type == "1"){
            $plat->note = $request->get('note');
        }elseif($auth->type == "2"){
            $plat->note = $plat->note;
        }
        $plat->save();

        return redirect()->route('restau.dashbord', $plat->id_plat);
    }

    public function create(){
        $auth = Auth::user();

        return view('plats.create', compact('auth'));
    }

    public function store(Request $request){
        $auth = Auth::user();
        $plat = new Plats;
        $restau = Restaurateurs::where('id_utilisateur', $auth->id)->first();

        $plat->nom = $request->get('nom');
        $plat->photo= $request->get('photo');
        $plat->prix = $request->get('prix');
        $plat->note = "0.0";
        $plat->id_restaurateur = $restau->id_restaurateur;
        $plat->save();

        return redirect()->route('restau.dashbord');
    }

    public function delete($platId){
        $plat = Plats::where('id_plat', $platId)->first();

        $plat->delete();

        return redirect()->route('restau.dashbord');
    }
}
