<!DOCTYPE html>
<html>
<head>
	<title>Index des Plats</title>
</head>
<body>
    <h1>Index des Plats</h1>

    <ul>
        @foreach($plats as $plat)
        <li>
            <img src="{{ $plat->photo }}" alt="{{ $plat->photo }}"/>
            {{ $plat->nom }} <a href="{{ route('admin.plat.edit', $plat->id_plat) }}" title="{{ $plat->nom }}">Modifier</a>
        </li>
        @endforeach
    </ul>

</body>
</html>