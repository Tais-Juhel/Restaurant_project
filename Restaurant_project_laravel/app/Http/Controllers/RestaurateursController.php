<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurateurs;

class RestaurateursController extends Controller
{
    public function index(){
        $restaurateurs = Restaurateurs::all();
        return view('administrateurs.membres', compact('restaurateurs'));
    }
}
