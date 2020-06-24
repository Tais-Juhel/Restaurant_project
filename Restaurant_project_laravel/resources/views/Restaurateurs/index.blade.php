<!DOCTYPE html>
<html>
<head>
    <title>Index des Restaurateurs</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/dist/index.css">
</head>
<body>
    <header>
        <nav>
            <img src="img/open-menu.svg" alt="burger menu" onclick="menu()">
            @if($auth == null)
            <a class="connectLink" href="{{ route('register') }}">Connexion / Inscription</a>
            @endif
            @if($auth == !null)
            <a class="connectLink" href="#">{{ $auth->name }}</a>
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

    <h1>Liste des restaurants</h1>

    <ul class='restaurateurs'>
        @foreach($restaurateurs as $restaurateur)
        <li><a href="{{ route('plats.index', $restaurateur->nom) }}">
            <div class="cadre"><img src="img/mcdo.jpg" alt="{{ $restaurateur->logo }}"/></div>
            <h4>{{ $restaurateur->nom }}</h4>
        </a></li>
        @endforeach
    </ul>

    <script src="js/index.js"></script>
</body>
</html>