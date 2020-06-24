<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/dist/dashRestau.css">
    <title>Document</title>
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

    <h1>Listes des plats</h1>

    <div class="plats">
        <ul class="platList">
            @foreach($plats as $plat)
                <li class="plat"><a href="{{ route('plats.edit', $plat->id_plat) }}">
                    <div class="cadre">
                        <img src="../img/mcdo.jpg" alt="{{ $plat->photo }}">
                    </div>
                    <div class="info">
                        <div class="name">
                            <h4>{{ $plat->nom }}</h4>
                            <p>{{ $plat->prix }}€</p>
                        </div>
                        <div class="note">
                            <p class="noteTittle">Note:</p>
                            <p class="note10">{{ $plat->note }}/10</p>
                        </div>
                    </div>
                </a></li>
            @endforeach
        </ul>
        <a class="addButton" href="#">Ajouter</a>
    </div>

    <script src="js/index.js"></script>
</body>
</html>