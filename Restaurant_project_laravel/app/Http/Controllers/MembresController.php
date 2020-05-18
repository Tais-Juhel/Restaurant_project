<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Membres;

class MembresController extends Controller
{
    public function index()
    {
        return Membres::all();
    }

    public function show(Membres $membres)
    {
        return $membres;
    }

    public function store(Request $request)
    {
        $membres = Membres::create($request->all());

        return response()->json($membres, 201);
    }

    public function update(Request $request, Membres $membres)
    {
        $membres->update($request->all());

        return response()->json($membres, 200);
    }

    public function delete(Membres $membres)
    {
        $membres->delete();

        return response()->json(null, 204);
    }
}
