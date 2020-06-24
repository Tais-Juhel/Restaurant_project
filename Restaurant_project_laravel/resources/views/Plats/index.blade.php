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
                    <li><a class="linkList" href="#">Profil</a></li>
                    <li><a class="linkList" href="#">Mes plats</a></li>
                    <li><a class="linkList" href="#">Tableau de bord</a></li>
                    @endcan
                    @can('membre-users')
                    <li><a class="linkList" href="#">Profil</a></li>
                    <li><a class="linkList" href="#">Restaurants</a></li>
                    @endcan
                    @can('admin-users')
                    <li><a class="linkList" href="#">Tableau de bord</a></li>
                    <li><a class="linkList" href="#">Utilisateurs</a></li>
                    @endcan
                </ul>
            </div>
        </nav>
        <div class="couverture">
            <img src="" alt="logoCouverture">
        </div>
    </header>

    <h1>Liste des plats de {{ $restaurant->nom }}</h1>

    <ul class='plats'>
        @foreach($plats as $plat)
        <li>
            <div class="cadre"><img src="../img/mcdo.jpg" alt="img/mcdo.jpg"/></div>
            <h4>{{ $plat->nom }}</h4>
            <p>Frais de port : 2.50€</p>
        </li>
        @endforeach
    </ul>

    <script src="../js/index.js"></script>
</body>
</html>