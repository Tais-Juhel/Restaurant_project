<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administrateurs;

class AdministrateursController extends Controller
{
    public function index()
    {
        return Administrateurs::all();
    }

    public function show(Administrateurs $administrateurs)
    {
        return $administrateurs;
    }

    public function store(Request $request)
    {
        $administrateurs = Administrateurs::create($request->all());

        return response()->json($administrateurs, 201);
    }

    public function update(Request $request, Administrateurs $administrateurs)
    {
        $administrateurs->update($request->all());

        return response()->json($administrateurs, 200);
    }

    public function delete(Administrateurs $administrateurs)
    {
        $administrateurs->delete();

        return response()->json(null, 204);
    }
}
