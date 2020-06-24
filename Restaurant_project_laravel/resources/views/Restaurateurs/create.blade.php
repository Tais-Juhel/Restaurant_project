@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Register - Membre</div>

                    <div class="card-body">
                    <form action="{{ route('restaurateurs.store') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="form-group row">
                            <label for="nom" class="col-md-4 col-form-label text-md-right">Nom</label>
                            <div class="col-md-6"><input type="text" class="form-control" id="nom" name="nom"></div>
                        </div>
                        <div class="form-group row">
                            <label for="logo" class="col-md-4 col-form-label text-md-right">Logo</label>
                            <div class="col-md-6"><input type="text" class="form-control" id="logo" name="logo"></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4"><input class="btn btn-primary" type="submit" value="Register"></div>
                        </div>
                    </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
