<?php

namespace App\Http\Controllers;

use App\Plats;
use App\Lignes;
use App\Membres;
use App\Commandes;
use App\Restaurateurs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommandesController extends Controller
{
    public function index(){
        $auth = Auth::user();
        $membre = Membres::where('id_utilisateur', $auth->id)->first();
        $commandes = Commandes::all()->where('id_membre', $membre->id_membre);
        $lignes = Lignes::all();
        $plats = Plats::all();
        $restaus = Restaurateurs::all();

        return view('commandes.index', compact('commandes', 'lignes', 'plats', 'auth', 'restaus'));
    }

    public function create(Request $request, $restauId){
        $auth = Auth::user();
        $plats = Plats::all()->whereIn('id_plat', $request);
        $restau = Restaurateurs::where('id_restaurateur', $restauId)->first();
        return view('commandes.create', compact('request', 'auth', 'plats', 'restau'));
    }

    public function store(Request $request){
        $auth = Auth::user();
        $membre = Membres::where('id_utilisateur', $auth->id)->first();
        $plats = Plats::all()->whereIn('id_plat', $request);

        date_default_timezone_set('UTC');
        
        $commande = new Commandes;
        $commande->total = $request->get('total');
        $commande->date_commande = date('Y-j-w H:i:s');
        $commande->date_livraison = date('Y-j-w H:i:s',  strtotime(' + 2 hours + 30 minutes'));
        $commande->adresse_livraison = $membre->adresse;
        $commande->id_membre = $membre->id_membre;
        $commande->etat = "En cours";
        $commande->save();

        foreach($plats as $plat){
            $ligne = new Lignes;
            $ligne->num_commande = $commande->id;
            $ligne->id_plat = $plat->id_plat;
            $ligne->save();
        }

        return redirect()->route('restaurateurs.index');
    }
}
