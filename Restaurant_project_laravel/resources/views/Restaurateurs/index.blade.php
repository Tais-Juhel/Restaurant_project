<!DOCTYPE html>
<html>
<head>
	<title>Index des Restaurateurs</title>
</head>
<body>
    <h1>Index des Restaurateurs</h1>

    <ul>
        @foreach($restaurateurs as $restaurateur)
        <li>
            <img src="{{ $restaurateur->logo }}" alt="{{ $restaurateur->logo }}"/>
            {{ $restaurateur->nom }} <a href="{{ route('admin.restaurateur.edit', $restaurateur->id_restaurateur) }}" title="{{ $restaurateur->nom }}">Modifier</a>
        </li>
        @endforeach
    </ul>

</body>
</html>