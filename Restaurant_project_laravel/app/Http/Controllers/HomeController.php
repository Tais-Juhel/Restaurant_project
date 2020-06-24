<?php

namespace App\Http\Controllers;

use App\Restaurateurs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $restaurateurs = Restaurateurs::all();
        $auth = Auth::user();
        return view('restaurateurs.index', compact('auth', 'restaurateurs'));
    }
}
