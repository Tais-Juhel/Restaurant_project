<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un Restaurateur</title>
</head>
<body>
    <h1>Modifier un Restaurateur</h1>
    
    <a href="{{ route('admin.restaurateurs.index') }}">Retour à l'index</a>

    <form method="post" action="{{ route('admin.restaurateur.update', $restaurateur->id_restaurateur) }}">

        @csrf

        <input type="hidden" name="_method" value="PUT">

        <label for="nom">Nom : </label>
        <input id="nom" type="text" name="nom" value="{{ $restaurateur->nom }}" require>
        <label for="logo">Logo : </label>
        <input id="logo" type="text" name="logo" value="{{ $restaurateur->logo }}" require>

        <input type="submit">
    </form>
</body>
</html>