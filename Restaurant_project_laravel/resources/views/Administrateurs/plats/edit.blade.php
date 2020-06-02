<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un Plat</title>
</head>
<body>
    <h1>Modifier un Plat</h1>

    <form method="post" action="{{ route('admin.plat.update', $plat->id_plat) }}">

        @csrf

        <input type="hidden" name="_method" value="PUT">

        <label for="nom">Nom : </label>
        <input id="nom" type="text" name="nom" value="{{ $plat->nom }}" require>
        <label for="photo">Photo : </label>
        <input id="photo" type="text" name="photo" value="{{ $plat->photo }}" require>
        <label for="prix">Prix : </label>
        <input id="prix" type="number" name="prix" value="{{ $plat->prix }}" step="0.01" require>
        <label for="note">Note : </label>
        <input id="note" type="number" name="note" value="{{ $plat->note }}" step="0.01" require>

        <input type="submit">
    </form>
</body>
</html>