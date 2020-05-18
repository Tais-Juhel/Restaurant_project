<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utilisateurs;

class UtilisateursController extends Controller
{
    public function index()
    {
        return Utilisateurs::all();
    }

    public function show(Utilisateurs $utilisateurs)
    {
        return $utilisateurs;
    }

    public function store(Request $request)
    {
        $utilisateurs = Utilisateurs::create($request->all());

        return response()->json($utilisateurs, 201);
    }

    public function update(Request $request, Utilisateurs $utilisateurs)
    {
        $utilisateurs->update($request->all());

        return response()->json($utilisateurs, 200);
    }

    public function delete(Utilisateurs $utilisateurs)
    {
        $utilisateurs->delete();

        return response()->json(null, 204);
    }
}
