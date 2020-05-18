<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurateurs;

class RestaurateursController extends Controller
{
    public function index()
    {
        return Restaurateurs::all();
    }

    public function show(Restaurateurs $restaurateurs)
    {
        return $restaurateurs;
    }

    public function store(Request $request)
    {
        $restaurateurs = Restaurateurs::create($request->all());

        return response()->json($restaurateurs, 201);
    }

    public function update(Request $request, Restaurateurs $restaurateurs)
    {
        $restaurateurs->update($request->all());

        return response()->json($restaurateurs, 200);
    }

    public function delete(Restaurateurs $prestaurateurs)
    {
        $restaurateurs->delete();

        return response()->json(null, 204);
    }
}
