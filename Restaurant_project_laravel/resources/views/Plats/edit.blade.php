@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Modifier <strong>{{ $plat->name }}</strong></div>
                    <div class="card-body">
                        <form action="{{ route('plats.update', $plat->id_plat) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" for="nom">Nom</label>
                                <div class="col-md-6"><input type="text" class="form-control" id="nom" name="nom" value="{{ $plat->nom }}"></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" for="prix">Prix</label>
                                <div class="col-md-6"><input type="number" step="0.01" class="form-control-file" id="prix" name="prix" value="{{ $plat->prix }}"></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" for="photo">Photo</label>
                                <div class="col-md-6"><input type="file" class="form-control-file" id="photo" name="photo" value="{{ $plat->photo }}"></div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4"><input class="btn btn-primary" type="submit" value="Register"></div>
                            </div>
                        </form>
                        
                        <form action="{{ route('plats.delete', $plat->id_plat) }}" method="POST">
                            @csrf 
                            @method('DELETE')
                            <div class="col-md-7 offset-md-9"><input type="submit" class="btn btn-warning" value="Supprimer"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection