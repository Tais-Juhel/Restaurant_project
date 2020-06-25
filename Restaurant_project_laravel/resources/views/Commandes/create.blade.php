<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/dist/command.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <img src="../../img/open-menu.svg" alt="burger menu" onclick="menu()">
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
                    <li><a class="linkList" href="{{ route('restau.dashbord') }}">Tableau de bord</a></li>
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
                <img src="../../img/logo.png" alt="logoCouverture">
            </div>
        </div>
    </header>

    <h1>Ma commande chez {{ $restau->nom }}</h1>

    <form action="{{ route('commandes.store') }}" method="POST">
        @csrf
        @method('POST')
        <ul class="billet">
            <script>
                let total = 0;
            </script>
            @foreach($plats as $plat)
            <script>
                total = total + {{ $plat->prix }};
            </script>
            <li>
                <input type="hidden" name="{{ $plat->id_plat }}" id="{{ $plat->id_plat }}" value="{{ $plat->id_plat }}">
                <div class="info">
                    <p class="nom"><strong>{{ $plat->nom }}</strong></p>
                    <p class="prix">{{ $plat->prix }} €</p>
                </div>
            </li>
            @endforeach
            <li>
                <input type="hidden" name="total" id="total">
                <div class="info">
                    <p class="nom"><strong>Total</strong></p>
                    <p class="prix" id="prix"></p>
                </div>
                <script>
                    document.getElementById('total').value = total;
                    document.getElementById('prix').innerHTML = total + " €";
                </script>
            </li>
        </ul>
        <input class="command" type="submit" value="Confirmer">
    </form>

    <script src="js/index.js"></script>
</body>
</html>