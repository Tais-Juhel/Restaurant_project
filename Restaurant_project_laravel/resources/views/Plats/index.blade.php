<!DOCTYPE html>
<html>
<head>
    <title>Index des Plats</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/dist/indexPlats.css">
</head>
<body>
<header>
        <nav>
            <img src="../img/open-menu.svg" alt="burger menu" onclick="menu()">
            @if($auth == null)
            <a class="connectLink" href="{{ route('register') }}">Connexion / Inscription</a>
            @endif
            @if($auth == !null)
            <a class="connectLink" href="{{ route('auth.show') }}">{{ $auth->name }}</a>
            @endif
            
            <div class="burgerMenu">
                <ul class="menuList">
                    @can('restau-users')
                    <li><a class="linkList" href="{{ route('auth.show') }}">Profil</a></li>
                    <li><a class="linkList" href="{{ route('plats.index') }}">Tableau de bord</a></li>
                    @endcan
                    @can('membre-users')
                    <li><a class="linkList" href="{{ route('auth.show') }}">Profil</a></li>
                    <li><a class="linkList" href="{{ route('restaurateurs.index') }}">Restaurants</a></li>
                    <li><a class="linkList" href="{{ route('commandes.index') }}">Mes commandes</a></li>
                    @endcan
                    @can('admin-users')
                    <li><a class="linkList" href="{{ route('admin.users.index') }}">Utilisateurs</a></li>
                    @endcan
                </ul>
            </div>
        </nav>
        <div class="couverture">
            <div class="img">
                <img src="../img/logo.png" alt="logoCouverture">
            </div>
        </div>
    </header>

    <h1>Liste des plats de {{ $restaurant->nom }}</h1>

    <form action="{{ route('commandes.create', $restaurant->id_restaurateur) }}" method="POST">
        @csrf
        @method('POST')
        <ul class='plats'>
            @foreach($plats as $plat)
            <li>
                <input class="checkbox" type="checkbox" name="{{ $plat->id_plat }}" id="{{ $plat->id_plat }}" value="{{ $plat->id_plat }}">
                <div class="cadre"><img src="../img/{{ $plat->photo }}" alt="img/mcdo.jpg"/></div>
                <div class="info">
                    <div class="name">
                        <h4>{{ $plat->nom }}</h4>
                        <p>Prix : {{ $plat->prix }} / Frais de port : 2.50€</p>
                    </div>
                    <div class="num">
                        <p class="note">{{ $plat->note }}/10</p>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>

        <input class="command" type="submit" value="Commander">
    </form>

    <script src="../js/index.js"></script>
</body>
</html>