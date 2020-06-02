<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un Membre</title>
</head>
<body>
    <h1>Modifier un Membre</h1>

    <form method="post" action="{{ route('admin.membre.update', $membre->id_membre) }}">

        @csrf

        <input type="hidden" name="_method" value="PUT">

        <label for="nom">Nom du contact à créer : </label>
        <input id="nom" type="text" name="nom" value="{{ $membre->nom }}" require>
        <label for="prenom">Prénom du contact à créer : </label>
        <input id="prenom" type="text" name="prenom" value="{{ $membre->prenom }}" require>

        <label for="solde">Solde du contact à créer : </label>
        <input id="solde" type="number" name="solde" value="{{ $membre->solde }}" require>

        <input type="submit">
    </form>
</body>
</html>