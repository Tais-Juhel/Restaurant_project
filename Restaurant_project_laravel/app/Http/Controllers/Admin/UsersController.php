<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use App\User;
use App\Membres;
use App\Restaurateurs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class UsersController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index')->with('users', $users);
    }

    public function profil(){
        $user = Auth::user();
        $profil;
        
        if($user->type == '2'){
            $profil = Restaurateurs::where('id_utilisateur', $user->id)->first();
        }elseif($user->type == '3'){
            $profil = Membres::where('id_utilisateur', $user->id)->first();
        }

        return view('admin.users.profil', compact('user', 'profil'));
    }

    public function updateA(Request $request){
        $user = Auth::user();
        $membre = Membres::where('id_utilisateur', $user->id)->first();
        $restau = Restaurateurs::where('id_utilisateur', $user->id)->first();

        if($membre == !null){
            $membre->prenom = $request->get('prenom');
            $membre->nom= $request->get('nom');
            $membre->save();
        }else{
            $restau->nom= $request->get('nom');
            $restau->logo= $request->get('logo');
            $restau->save();
        }

        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->save();

        return redirect()->route('auth.show');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if(Gate::denies('edit-users')){
            return redirect()->route('admin.users.index');
        }

        $roles = Role::all();
        return view('admin.users.edit', [
            'user' => $user,
            'roles' => $roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);

        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if(Gate::denies('delete-users')){
            return redirect()->route('admin.users.index');
        }

        $user->roles()->detach();
        $user->delete();

        return redirect()->route('admin.users.index');
    }
}
