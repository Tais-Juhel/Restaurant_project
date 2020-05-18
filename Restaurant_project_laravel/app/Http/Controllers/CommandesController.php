<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Commandes;

class CommandesController extends Controller
{
    public function index()
    {
        return Commandes::all();
    }

    public function show(Commandes $commandes)
    {
        return $commandes;
    }

    public function store(Request $request)
    {
        $commandes = Commandes::create($request->all());

        return response()->json($commandes, 201);
    }

    public function update(Request $request, Commandes $commandes)
    {
        $commandes->update($request->all());

        return response()->json($commandes, 200);
    }

    public function delete(Commandes $commandes)
    {
        $commandes->delete();

        return response()->json(null, 204);
    }
}
