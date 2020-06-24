<?php

namespace App\Http\Controllers;

use App\Plats;
use App\Restaurateurs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashbordController extends Controller
{
    public function restau(){
        $auth = Auth::user();
        $restau = Restaurateurs::where('id_utilisateur', $auth->id)->first();
        $plats = Plats::all()->where('id_restaurateur', $restau->id_restaurateur);

        return view('restaurateurs.dashbord', compact('auth', 'plats'));
    }
}
