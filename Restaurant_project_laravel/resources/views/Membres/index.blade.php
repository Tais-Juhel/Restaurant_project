<!DOCTYPE html>
<html>
<head>
	<title>Index des Membres</title>
</head>
<body>
    <h1>Index des Membres</h1>

    <ul>
        @foreach($membres as $membre)
        <li>
            {{ $membre->prenom }} <a href="{{ route('admin.membre.edit', $membre->id_membre) }}" title="{{ $membre->prenom }}">Modifier</a>
        </li>
        @endforeach
    </ul>

</body>
</html>