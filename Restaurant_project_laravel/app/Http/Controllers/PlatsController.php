<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plats;

class PlatsController extends Controller
{
    public function index()
    {
        return Plats::all();
    }

    public function show(Plats $plats)
    {
        return $plats;
    }

    public function store(Request $request)
    {
        $plats = Plats::create($request->all());

        return response()->json($plats, 201);
    }

    public function update(Request $request, Plats $plats)
    {
        $plats->update($request->all());

        return response()->json($plats, 200);
    }

    public function delete(Plats $plats)
    {
        $plats->delete();

        return response()->json(null, 204);
    }
}
