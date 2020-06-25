@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Modifier <strong>{{ $user->name }}</strong></div>
                    <div class="card-body">
                        <form action="{{ route('auth.update') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" for="name">Pseudo</label>
                                <div class="col-md-6"><input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}"></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" for="email">Email</label>
                                <div class="col-md-6"><input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}"></div>
                            </div>
                            @can('restau-users')
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" for="logo">Logo</label>
                                <div class="col-md-6"><input type="file" class="form-control-file" id="logo" name="logo" value="{{ $profil->logo }}"></div>
                            </div>
                            @endcan
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" for="nom">Nom</label>
                                <div class="col-md-6"><input type="text" class="form-control" id="nom" name="nom" value="{{ $profil->nom }}"></div>
                            </div>
                            @can('membre-users')
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" for="prenom">Prenom</label>
                                <div class="col-md-6"><input type="text" class="form-control" id="prenom" name="prenom" value="{{ $profil->prenom }}"></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" for="adresse">Adresse</label>
                                <div class="col-md-6"><input type="text" class="form-control" id="adresse" name="adresse" value="{{ $profil->adresse }}"></div>
                            </div>
                            @endcan
                            <div class="col-md-6 offset-md-4"><button type="submit" class="btn btn-primary">Submit</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection