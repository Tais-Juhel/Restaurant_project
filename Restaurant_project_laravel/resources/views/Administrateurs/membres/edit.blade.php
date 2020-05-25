<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un Membre</title>
</head>
<body>
    <h1>Modifier un Membre</h1>

    <form method="post" action="{{ route('admin.membres.store') }}">

        @csrf

        <label for="name">Nom du contact à créer : </label>
        <input id="name" type="text" name="name">
        <label for="firstname">Prénom du contact à créer : </label>
        <input id="firstname" type="text" name="firstname">

        <label for="number">Téléphone du contact à créer : </label>
        <input id="number" type="text" name="number">

        <label for="email">Email du contact à créer : </label>
        <input id="email" type="text" name="email">
        <label for="email_verified_at">Email verifier du contact à créer : </label>
        <input id="email_verified_at" type="text" name="email_verified_at">

        <input type="submit">
    </form>
</body>
</html>