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
            <a class="connectLink" href="#">Connexion / Inscription</a>
            <div class="burgerMenu">
                <ul class="menuList">
                    <li><a class="linkList" href="#">Profil</a></li>
                    <li><a class="linkList" href="#">Mes plats</a></li>
                    <li><a class="linkList" href="#">Tableau de bord</a></li>
                </ul>
            </div>
        </nav>
        <div class="couverture">
            <img src="" alt="logoCouverture">
        </div>
        </header>

    <ul class='restaurateurs'>
        @foreach($restaurateurs as $restaurateur)
        <li>
            <div class="cadre"><img src="img/mcdo.jpg" alt="{{ $restaurateur->logo }}"/></div>
            <h4>{{ $restaurateur->nom }}</h4>
            <a href="#" title="{{ $restaurateur->nom }}">Modifier</a>
        </li>
        @endforeach
    </ul>

    <script src="js/index.js"></script>
</body>
</html>